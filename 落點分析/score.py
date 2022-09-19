# -*- coding: utf-8 -*-
"""
Created on Sat Sep 17 16:05:23 2022

@author: user
"""

from sshtunnel import SSHTunnelForwarder
import pymysql
import numpy as np
import matplotlib.pyplot as plt

startYear = 108
targetYear = 111
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

def to111(tar, sour):
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
    
    cursor.execute("SELECT * FROM `gsat_score_summary` where year > 107")
    population = collectPopulationData(cursor.fetchall())
    
    adjustScore = createDictSubject(startYear, targetYear)
    for year in range(startYear, targetYear):
        adjustScore[year] = to111(population[targetYear], population[year])
            
    
connection.close()
server.close()