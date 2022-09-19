# -*- coding: utf-8 -*-
"""
Created on Thu Sep 15 12:10:03 2022

@author: sel
"""
from tensorflow import keras
import tensorflow as tf
from itertools import combinations



HEADER = ['id', 'interestID', 'ch', 'eng', 'sci', 'soc', 'total', 'ch_eng', 'ch_sci', 'ch_soc', 'ch_total', 'eng_sci', 
          'eng_soc', 'eng_total', 'mathA_mathB', 'sci_soc', 'sci_total', 'soc_total', 'ch_eng_sci', 'ch_eng_soc', 
          'ch_eng_total', 'ch_mathA_mathB', 'ch_sci_soc', 'ch_sci_total', 'ch_soc_total', 'eng_mathA_mathB', 
          'eng_sci_soc', 'eng_sci_total', 'eng_soc_total', 'mathA_mathB_sci', 'mathA_mathB_soc', 'mathA_mathB_total', 
          'sci_soc_total', 'ch_eng_mathA_mathB', 'ch_eng_sci_soc', 'ch_eng_sci_total', 'ch_eng_soc_total', 
          'ch_mathA_mathB_sci', 'ch_mathA_mathB_soc', 'ch_mathA_mathB_total', 'ch_sci_soc_total', 'eng_mathA_mathB_sci', 
          'eng_mathA_mathB_soc', 'eng_mathA_mathB_total', 'eng_sci_soc_total', 'mathA_mathB_sci_soc', 
          'mathA_mathB_sci_total', 'mathA_mathB_soc_total', 'ch_eng_mathA_mathB_sci', 'ch_eng_mathA_mathB_soc', 
          'ch_eng_mathA_mathB_total', 'ch_eng_sci_soc_total', 'ch_mathA_mathB_sci_soc', 'ch_mathA_mathB_sci_total', 
          'ch_mathA_mathB_soc_total', 'eng_mathA_mathB_sci_soc', 'eng_mathA_mathB_sci_total', 'eng_mathA_mathB_soc_total',
          'mathA_mathB_sci_soc_total', 'ch_eng_mathA_mathB_sci_soc', 'ch_eng_mathA_mathB_sci_total', 
          'ch_eng_mathA_mathB_soc_total', 'ch_mathA_mathB_sci_soc_total', 'eng_mathA_mathB_sci_soc_total', 
          'ch_eng_mathA_mathB_sci_soc_total', 'year', 'A', 'AC', 'AE', 'AI', 'AR', 'AS', 'C', 'CA', 'CE', 'CI', 'CR', 
          'CS', 'E', 'EA', 'EC', 'EI', 'ER', 'ES', 'I', 'IA', 'IC', 'IE', 'IR', 'IS', 'R', 'RA', 'RC', 'RE', 'RI', 
          'RS', 'S', 'SA', 'SC', 'SE', 'SI', 'SR', 'field_code']


def socre_cal(num):
    sub = ['ch', 'eng', 'math', 'soc', 'sci','total']
    ans = []
    dic = dict(zip(sub,num))
    for item in HEADER[2:HEADER.index('year')]:
        score = 0
        for s in sub:
            if s in item:
                score += dic[s]
        
        ans.append(score)
        
    return ans


def inter_cal(grade):
    item = ['R','I','A','S','E','C']

    score = dict(zip(item,grade))


    score = dict(sorted(score.items(), key=lambda x:x[1], reverse = True))

    for i in list(score.keys())[::-1]:
        if score[i] < 60:
            del score[i]
            if len(score) < 3:
                break

    ans = [list(score.keys())[0]+list(score.keys())[1]]

    for i in range(1,3 if len(score) > 2 else len(score)+1):
        for comb in combinations(list(score.keys())[0:3],i):
            string = ''
            for j in comb:
                string += j
            ans.append(string)
    return ans

def pred():
    
    
    with open('newfile.txt','r') as f:
        info = [int(_) for _ in f.read().split(',')]
    
    data = [0 for _ in HEADER]
    data[0] = '11110034918'
    data[HEADER.index('year')] = info[0]
    
    inter_score = info[7:]
    
    score = info[1:2]+[max(info[2:4])]+info[4:7]
    score.append(sum(score))
    #print(score,inter_score)
    
    
    data[2:HEADER.index('year')] = socre_cal(score)
    
    interest_result = inter_cal(inter_score)
    
    data[HEADER.index('interestID')] = interest_result[0]
    
    
    for i in interest_result:
        data[HEADER.index(i)] = 1
    
    
    
    model = keras.models.load_model('./')
    
    
    with open('temp.csv','w') as csvfile:
        string = ''
        for i in HEADER:
            string += (i+',')
            
        csvfile.write(string[:-1]+'\n')
        string = ''
        for i in data:
            string += (str(i)+',')
            
        csvfile.write(string[:-1])
            
    dataset = get_dataset_from_csv('temp.csv', 1)
    
    model = keras.models.load_model('./')
    
    arr = model.predict(dataset,batch_size=1)
    print(list(arr[0]).index(max(arr[0]))+1)
    


def get_dataset_from_csv(csv_file_path, batch_size):

    dataset = tf.data.experimental.make_csv_dataset(
        csv_file_path,
        batch_size=batch_size,
        column_names=HEADER,
        column_defaults=[['NA'] if i < 2 else [0] for i in range(len(HEADER))],
        num_epochs=1,
        header=True,
        shuffle=False,
    )
    '''print('-------------------------------------------------------------------------')
    print(dataset)
    print('-------------------------------------------------------------------------')'''
    return dataset.cache()






if __name__ == '__main__':
    #CSV_HEADER = pd.read_csv('test_data2.csv').columns.values.tolist()
    temp = [111, 14, 11, 0, 11, 13, 14, 80, 70, 40, 30, 50, 60]
    
    pred()