import pandas as pd
from sklearn.preprocessing import LabelEncoder
from sklearn.naive_bayes import GaussianNB
from sklearn.metrics import accuracy_score, precision_score, recall_score
from sklearn.model_selection import train_test_split
data = pd.read_csv("data.csv")
data.columns = data.columns.str.strip()  
print("Original Data:\n", data)
X = data.iloc[:, :-1].copy()
y = data.iloc[:, -1]
le_outlook = LabelEncoder()
X["Outlook"] = le_outlook.fit_transform(X["Outlook"])
le_temp = LabelEncoder()
X["Temperature"] = le_temp.fit_transform(X["Temperature"])
print("\nEncoded Features (X):\n", X)
le_play = LabelEncoder()
y = le_play.fit_transform(y)
print("\nEncoded Target (y):\n", y)
X_train, X_test, y_train, y_test = train_test_split(
    X, y, test_size=0.20, random_state=42
)
classifier = GaussianNB()
classifier.fit(X_train, y_train)
y_pred = classifier.predict(X_test)
print("\nAccuracy:", accuracy_score(y_test, y_pred))
print("Recall:", recall_score(y_test, y_pred, average="binary"))
print("Precision:", precision_score(y_test, y_pred, average="binary"))
