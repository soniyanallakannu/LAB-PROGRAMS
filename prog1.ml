import csv
def loaddata(filename):
    with open(filename, 'r') as file:
        data = list(csv.reader(file))
        return data[0], data[1:]
def finds(data):
    for row in data:
        if row[-1].lower() == 'yes':
            hypothesis = row[:-1]
            break
    else:
        return None  
    for row in data:
        if row[-1].lower() == 'yes':
            for i in range(len(hypothesis)):
                if hypothesis[i] != row[i]:
                    hypothesis[i] = '?'
    return hypothesis
filename='trainingdata.csv'
header, data = loaddata('trainingdata.csv')
print("Training Data:")
for row in data:
    print(row)
hypothesis = finds(data)
if hypothesis:
    print("\nMost Specific Hypothesis:")
    print(hypothesis)
else:
    print("\nNo positive examples found.")
