import pandas as pd

df=pd.read_csv("tharun.csv")

import matplotlib.pyplot as plt

print(df.variety)

df.head(19)

variety_counts=df["variety"].value_counts()
variety_counts=dict(variety_counts)

a=variety_counts.keys()
b=variety_counts.values()

print(a)
print(b)

c=['iris-virginica','iris-versicolor','iris-setosa']
print(c)

plt.figure(figsize=(8,8))
plt.pie(x=b,labels=c,explode=[0.1,0.1,0.1],autopct='%1.1f%%')
plt.title("Iris species %")
plt.legend()
plt.show()

import numpy as np



d=df['sepal.length']
e=df['sepal.width']


fig=plt.figure(figsize=(5,5))
plt.scatter(d,e)
plt.scatter()
plt.show()
Footer

