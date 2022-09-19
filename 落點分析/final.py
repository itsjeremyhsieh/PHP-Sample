# -*- coding: utf-8 -*-
"""
Created on Fri Sep 16 20:39:15 2022

@author: user
"""


from sshtunnel import SSHTunnelForwarder
import pymysql
import math

server = SSHTunnelForwarder(ssh_address_or_host=('120.107.172.131',22),
                            ssh_username='server-113',
                            ssh_password='123456',
                            remote_bind_address=('localhost', 3306))

server.start()
connection=pymysql.connect(host='127.0.0.1',                #不要改
                           port=server.local_bind_port,
                           user='admin',
                           password='NCUEcsie!@',
                           db='independent_study',
                           charset='utf8')

startYear = 108
targetYear = 111
depList = []
depScore = {}


subjectList = {
    0 :'soc_',
    1 :'sci_',
    2 :'sci_soc_',
    3 :'mathB_',
    4 :'mathB_soc_',
    5 :'mathB_sci_',
    6 :'mathB_sci_soc_',
    7 :'mathA_',
    8 :'mathA_soc_',
    9 :'mathA_sci_',
    10 :'mathA_sci_soc_',
    11 :'eng_',
    12 :'eng_soc_',
    13 :'eng_sci_',
    14 :'eng_sci_soc_',
    15 :'eng_mathB_',
    16 :'eng_mathB_soc_',
    17 :'eng_mathB_sci_',
    18 :'eng_mathB_sci_soc_',
    19 :'eng_mathA_',
    20 :'eng_mathA_soc_',
    21 :'eng_mathA_sci_',
    22 :'eng_mathA_sci_soc_',
    23 :'ch_',
    24 :'ch_soc_',
    25 :'ch_sci_',
    26 :'ch_sci_soc_',
    27 :'ch_mathB_',
    28 :'ch_mathB_soc_',
    29 :'ch_mathB_sci_',
    30 :'ch_mathB_sci_soc_',
    31 :'ch_mathA_',
    32 :'ch_mathA_soc_',
    33 :'ch_mathA_sci_',
    34 :'ch_mathA_sci_soc_',
    35 :'ch_eng_',
    36 :'ch_eng_soc_',
    37 :'ch_eng_sci_',
    38 :'ch_eng_sci_soc_',
    39 :'ch_eng_mathB_',
    40 :'ch_eng_mathB_soc_',
    41 :'ch_eng_mathB_sci_',
    42 :'ch_eng_mathA_',
    43 :'ch_eng_mathA_soc_',
    44 :'ch_eng_mathA_sci_'
}

def calculateDifficulty():
    difficulty = {}
    for year in range(108, 112):
        tmpdic = {}
        i = 0
        for ch in range(2):
            for eng in range(2):
                for mathA in range(2):
                    for mathB in range(2):
                        for sci in range(2):
                            for soc in range(2):
                                sub = ch + eng + mathA + sci + soc + mathB
                                if(mathA == 1 and mathB == 1):
                                    continue
                                if(sub > 4 or sub < 1): 
                                    continue
                                newmathA = mathA
                                newmathB = mathB
                                if(year < 111 and (mathA == 1 or mathB == 1)):
                                    newmathA = 1
                                    newmathB = 1
                                
                                cursor.execute("SELECT * FROM gsat_score_summary WHERE year=%s and chinese = %s and english = %s and mathA = %s and mathB = %s and science = %s and social = %s order by grade asc", (str(year), str(ch), str(eng), str(newmathA), str(newmathB), str(sci), str(soc)))
                                
                                fetch = list(cursor.fetchall())
                                totalpop = fetch[0][9]
                                tmplist = []
                                accu = 0
                                count = 0
                                countsub = 0
                                temp = []
                                for k in range(15*sub, -1, -1):
                                    accu += fetch[k][8]
                                        
                                    if(k % (3*sub) == 0 and k != 15*sub):
                                        temp.append(round(count/countsub, 2))
                                        count = 0
                                        countsub = 0
                                    count += k * (float(accu)/totalpop * 100)
                                    countsub += k
                                tmpdic[subjectList[i]] = temp
                                
                                i += 1
        difficulty[year] = tmpdic
    return difficulty

def probCalculate(subjectCount, offset):
    if offset > 1.5:
        return 1
    elif offset < -1.5:
        return 0
    if subjectCount == 1:
        if offset > 1.5: return 1
        elif offset < -1.5: return 0
        else: return 1 / (1 + math.e ** (-1.92 * offset))
    elif subjectCount == 2:
        if offset > 2: return 1
        elif offset < -2: return 0
        else: return 1 / (1 + math.e ** (-1.63 * offset))
    elif subjectCount == 3:
        if offset > 2.5: return 1
        elif offset < -2.5: return 0
        else: return 1 / (1 + math.e ** (-1.08 * offset))
    elif subjectCount == 4:
        if offset > 3: return 1
        elif offset < -3: return 0
        else: return 1 / (1 + math.e ** (-1.02 * offset))

def sortDepScore(e):
    return e[3:9]

def conv(tar, sour):
    for subject in subjectList.values():
        tar[subject].append(0)
        sour[subject].append(0)
        
    adjustScore = {}
    for subject in subjectList.values():
        adjustScore[subject] = []
        subjectCount = subject.count("_")
        for score in range(0, subjectCount * 15 + 1):
            adjustScore[subject].append(0)
            
    
    for i, (key, subject) in enumerate(subjectList.items()):
        idxSour = 0
        idxTar = 0
        while idxSour < len(sour[subject]) - 1:
            if sour[subject][idxSour] > tar[subject][idxTar]:
                adjustScore[subject][idxSour] = (idxTar - 1) + (tar[subject][idxTar - 1] - sour[subject][idxSour]) / (tar[subject][idxTar - 1] - tar[subject][idxTar])
                idxSour += 1
            else:
                idxTar += 1
    
    
    return adjustScore

def createDictSubject(start, end):
    myDict = {}
    for year in range(start, end):
        myDict[year] = {}
        for subject in subjectList.values():
            myDict[year][subject] = []
            subjectCount = subject.count("_")
            for score in range(0, subjectCount * 15 + 1):
                myDict[year][subject].append(0)
    return myDict

def createDictDep(start, end):
    myDict = {}
    for year in range(start, end):
        myDict[year] = {}
        for dep in depList:
            myDict[year][dep[0]] = []
    return myDict

def collectPopulationData(tempPopulation):
    
    population = createDictSubject(startYear, targetYear + 1)
    total = 0
    for e in tempPopulation:
        if e[3] == 1 and e[4] == 1 and e[0] == '111': continue
        subjectIdx = ""
        if e[7] == 0: total = e[9]
        
        if e[0] == '111':
            if e[1] == 1: subjectIdx += "ch_"
            if e[2] == 1: subjectIdx += "eng_"
            if e[3] == 1: subjectIdx += "mathA_"
            if e[4] == 1: subjectIdx += "mathB_"
            if e[5] == 1: subjectIdx += "sci_"
            if e[6] == 1: subjectIdx += "soc_"
            population[int(e[0])][subjectIdx][e[7]] = e[9] / total
        else:
            if e[1] == 1: subjectIdx += "ch_"
            if e[2] == 1: subjectIdx += "eng_"
            if e[3] == 1: subjectIdx += "mathA_"
            if e[5] == 1: subjectIdx += "sci_"
            if e[6] == 1: subjectIdx += "soc_"
            population[int(e[0])][subjectIdx][e[7]] = e[9] / total
            subjectIdx = ""
            if e[1] == 1: subjectIdx += "ch_"
            if e[2] == 1: subjectIdx += "eng_"
            if e[4] == 1: subjectIdx += "mathB_"
            if e[5] == 1: subjectIdx += "sci_"
            if e[6] == 1: subjectIdx += "soc_"
            population[int(e[0])][subjectIdx][e[7]] = e[9] / total
    
    return population

with connection.cursor() as cursor:
    
    #將累計人數抓下來作級分轉換表
    cursor.execute("SELECT * FROM `gsat_score_summary` where year > 107")
    population = collectPopulationData(cursor.fetchall())
    
    adjustScore = createDictSubject(startYear, targetYear)
    for year in range(startYear, targetYear):
        adjustScore[year] = conv(population[targetYear], population[year])
    
    
    #將各年各系所的最低級分抓下來並整理好
    cursor.execute("select distinct depID from 111t where year = '111'")
    depList = cursor.fetchall()
    
    depScore = createDictDep(startYear, targetYear + 1)
            
    cursor.execute("select * from 111t where year < 112 and year > 107 order by year ASC")
    tempScore = cursor.fetchall()
        
    for score in tempScore:
        temp = []
        for e in score:
            temp.append(e)
        try:
            depScore[int(score[1])][score[0]].append(temp)
        except:
            print(score[0], score[1])
    
    for year in range(startYear, targetYear + 1):
        for dep in depList:
            depScore[year][dep[0]].sort(key = sortDepScore)
    
    for year in range(startYear, targetYear):
        for dep in depList:
            #if depScore[year][dep[0]][0][0] != '017162':continue
            
            for score in range(len(depScore[year][dep[0]])):
                try:
                    subjectIdx = ""
                    if depScore[year][dep[0]][score][3] != 0:subjectIdx += "ch_"
                    if depScore[year][dep[0]][score][4] != 0:subjectIdx += "eng_"
                    
                    if depScore[year][dep[0]][score][5] != 0 and depScore[year][dep[0]][score][6] != 0:
                        mA = False
                        mB = False
                        
                        for scoreTarget in range(len(depScore[targetYear][dep[0]])):
                            if depScore[targetYear][dep[0]][scoreTarget][5] != 0:
                                mA = True
                                break
                            elif depScore[targetYear][dep[0]][scoreTarget][6] != 0:
                                mB = True
                                break
                        if mA: subjectIdx += "mathA_"
                        elif mB: subjectIdx += "mathB_" 
                        else:
                            depScore[year][dep[0]][score].append("error")
                    
                    elif depScore[year][dep[0]][score][5] != 0:subjectIdx += "mathA_"
                    elif depScore[year][dep[0]][score][6] != 0:subjectIdx += "mathB_"
                    if depScore[year][dep[0]][score][7] != 0:subjectIdx += "sci_"
                    if depScore[year][dep[0]][score][8] != 0:subjectIdx += "soc_"
                except:
                    print(dep[0], score, year)
                try:
                    if "error" not in depScore[year][dep[0]][score]:
                        depScore[year][dep[0]][score][10] = adjustScore[year][subjectIdx][depScore[year][dep[0]][score][10]]
                        depScore[year][dep[0]][score].append(subjectIdx)
                except:
                    print(subjectIdx, depScore[year][dep[0]][score][10], dep[0], year, "t")
                    
    for year in range(startYear, targetYear):
        for dep in depList:
            idx = 0
            while idx < len(depScore[year][dep[0]]):
                if "error" in depScore[year][dep[0]][idx]:
                    depScore[year][dep[0]].remove(depScore[year][dep[0]][idx])
                else:
                    idx += 1
    
    depList2 = []
    for dep in depList:
        depList2.append(dep[0])
    
    for dep in depList:
        delete = True
        for year in range(startYear, targetYear):
            if len(depScore[year][dep[0]]) != 0:
                delete = False
                break
        if delete:
               
            try:
                depList2.remove(depScore[targetYear][dep[0]][0][0])
            except:
                print(depScore[targetYear][dep[0]][0][0])
            for year in range(startYear, targetYear + 1):
                del depScore[year][dep[0]] 
    
    
    difficulty = calculateDifficulty()
    
    result = {}
    for ch in range(16):
        for eng in range(16):
            for mathA in range(16):
                for mathB in range(16):
                    for sci in range(16):
                        for soc in range(16):
                            if ch != 13 or eng != 13 or mathA != 13 or mathB != 13 or sci != 13 or soc != 13: continue
                            subjectScore = {"ch_": ch, "eng": eng, "mathA": mathA, "mathB": mathB, "sci": sci, "soc": soc}
                            
                            for dep in depList2:
                                '''
                                outlier = True
                                for score in depScore[targetYear][dep]:
                                    if score[10] != 0:
                                        outlier = False
                                if outlier: print("o")
                            '''
                                
                                yearProb = 0
                                total = 0 #test
                                count = 0
                                for year in range(startYear, targetYear):
                                    if len(depScore[year][dep]) == 0:continue
                                    count += 1
                                    minProb = 1
                                    for score in range(len(depScore[year][dep])):
                                        userScore = 0
                                        subjectCount = 0
                                        if "ch" in depScore[year][dep][score][11]:
                                            userScore += ch
                                            subjectCount += 1
                                        if "eng" in depScore[year][dep][score][11]:
                                            userScore += eng
                                            subjectCount += 1
                                        if "mathA" in depScore[year][dep][score][11]:
                                            userScore += mathA
                                            subjectCount += 1
                                        if "mathB" in depScore[year][dep][score][11]:
                                            userScore += mathB
                                            subjectCount += 1
                                        if "sci" in depScore[year][dep][score][11]:
                                            userScore += sci
                                            subjectCount += 1
                                        if "soc" in depScore[year][dep][score][11]:
                                            userScore += soc
                                            subjectCount += 1
                                        offset = userScore - depScore[year][dep][score][10]
                                        prob = probCalculate(subjectCount, offset)
                                        minProb = min(minProb, prob)
                                    if year != 111:
                                        total += minProb
                                yearProb = total / count
                                result[dep] = yearProb

    
                         
    
connection.close()
server.close()