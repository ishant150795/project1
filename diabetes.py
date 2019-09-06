import csv
import random
import math
import operator

with open('diabetes.csv') as csvfile:
    lines=csv.reader(csvfile)
    #for row in lines:
         #print(','.join(row))

def loadData(filename,split,trainingSet=[],testSet=[]):
    with open(filename,'r') as csvfile:
        lines=csv.reader(csvfile)
        dataset=list(lines)
        for x in range(len(dataset)-1):
            for y in range(7):
                dataset[x][y]=float(dataset[x+1][y+1])
            if random.random()<split:
                trainingSet.append(dataset[x])
            else:
                testSet.append(dataset[x])
trainingSet=[]
testSet=[]
loadData('diabetes.csv',0.66,trainingSet,testSet)
#print('Train:'+repr(len(trainingSet)))
print('Test:'+repr(len(testSet)))
def euclideanDistance(instance1,instance2,length):
    distance=0
    for x in range(length):
        distance+=pow((instance1[x]-instance2[x]),2)
    return math.sqrt(distance)
data1=[0,117,80,31,53,45.2,0.089,24,'0']
data2=[4,142,86,0,0,44,0.645,22,'1']
distance=euclideanDistance(data1,data2,8)
#print('Distance:'+repr(distance))
def getNeighbors(trainingSet,testInstance,k):
    distances=[]
    length=len(testInstance)-1
    for x in range(len(trainingSet)):
        dist=euclideanDistance(testInstance,trainingSet[x],length)
        distances.append((trainingSet[x],dist))
    distances.sort(key=operator.itemgetter(1) )
    neighbors=[]
    for x in range(k):
        neighbors.append(distances[x][0])
    return neighbors
trainingSet=[[3,108,62,24,0,26,0.223,25,0],[4,136,70,0,0,31.2,1.182,22,1]]
testInstance=[]
f=open("d_input.txt","r")
str= f.read()
t=str.split()
for i in t:
     testInstance= testInstance + [float(i)]


neighbors=getNeighbors(trainingSet,testInstance,1)
out=neighbors[0][8]
if out==0:
     print(" Hurray! You are Non-Diabetic! :)")
else:
     print("According to our system, You are Diabetic! You can search doctors in our find doctor section. ")


# def getResponse(neighbors):
#     classVotes={}
#     for x in range(len(neighbors)):
#         response=neighbors[x][-1]
#         if response is classVotes:
#             classsVotes[response]+=1
#         else:
#             classVotes[response]=1
#     sortedVotes=sorted(classVotes.items(),key=operator.itemgetter(1),reverse=True)
#     return sortedVotes[0][0]
# neighbors=[[6,190,92,0,0,35.5,0.278,66,1],[9,170,74,31,0,44,0.403,43,1],[2,88,58,26,16,28.4,0.766,22,0]]
# response=getResponse(neighbors)
# print(response)
# def getAccuracy(testSet,prediction):
#     correct=0
#     for x in range(len(testSet)):
#         if testSet[x][-1] is prediction[x]:
#             correct+=1
#     return(correct/float(len(testSet)))*100.0
# testSet=[[7,129,68,49,125,38.5,0.439,43,'1'],[7,142,90,24,480,30.4,0.128,43,'1'],[0,99,0,0,0,25,0.253,22,'0']]
# prediction=['1','1','1']
# accuracy=getAccuracy(testSet,prediction)
# print(accuracy)
# def main():
#     trainingSet=[]
#     testSet=[]
#     split=0.67
#     loadData('diabetes.csv',split,trainingSet,testSet)
#     print("Train set:"+repr(len(trainingSet)))
#     print("Test set:" +repr(len(testSet)))
#     predictions=[]
#     k=3
#     for x in range(len(testSet)):
#         neighbors=getNeighbors(trainingSet,testSet[x],k)
#         result=getResponse(neighbors)
#         predictions.append(result)
#         print('>predicted='+repr(result)+',actual='+repr(testSet[x][-1]))
#     accuracy=getAccuracy(testSet,predictions)
#     print('Accuracy:'+repr(accuracy)+'%')
# main()


