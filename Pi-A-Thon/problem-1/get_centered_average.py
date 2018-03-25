# -*- coding: utf-8 -*-
"""
Created on Sat 24-03-2018

@author: VarunViperapex
@Team : 404-Not Found
"""
import numpy as np

arry = []
number = int(input("Enter the number of elements you want:"))
if(number<3):
    print ('Enter more than 3 numbers: ')
else:
    #print ('Enter numbers in array: ')
    elements = (input("Enter the elements you want:"))
    k=elements.split()
    print(k)
    for i in range(int(number)):
        arry.append(int(k[i]))

    print ('ORIGINAL ARRAY: ',arry)
    y = np.array([arry])
    y = y[y>=0]
def Remove(y):
    final_list = []
    for num in y:
        if num not in final_list:
            final_list.append(num)
    return final_list
print('NEGATIVE & DUPLICATES REMOVED: ',Remove(y))
x = np.array(Remove(y))
z=len(Remove(y))-1
w = np.delete(x,[0,z])
print("First and last elements removed",w)
print('Centered Average:',w.mean())



    
