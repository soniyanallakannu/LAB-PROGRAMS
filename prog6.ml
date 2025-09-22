import pandas as pd 
from sklearn.model_selection import train_test_split 
from sklearn.feature_extraction.text import CountVectorizer 
from sklearn.naive_bayes import MultinomialNB 
from sklearn.metrics import accuracy_score,precision_score,recall_score 
df = pd.read_csv('document.csv') 
print(df) 
texts = df['text'].values 
labels = df['label'].values 
vectorizer = CountVectorizer() 
x = vectorizer.fit_transform(texts) 
x_train,x_test,y_train,y_test = train_test_split(x,labels,test_size = 
0.20,random_state = 42) 
model = MultinomialNB() 
model.fit(x_train,y_train) 
y_pred = model.predict(x_test) 
accuracy = accuracy_score(y_test,y_pred) 
precision = precision_score(y_test,y_pred,pos_label = 'positive') 
recall = recall_score(y_test,y_pred,pos_label = 'positive') 
print("Test Result:") 
for text,true_label,pred_label in zip(vectorizer.inverse_transform(x_test),y_test,y_pred):
    print(f"Text:{' '.join(text)} | True:{true_label} | Predicted: {pred_label}") 
print("\nMetrics:") 
print(f"Accuracy:{accuracy:.2f}") 
print(f"Precision:{precision:.2f}") 
print(f"Recall:{recall:.2f}")
