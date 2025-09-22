import numpy as np 
import matplotlib.pyplot as plt 
from sklearn.datasets import load_diabetes 
from sklearn.linear_model import LinearRegression 
from sklearn.model_selection import train_test_split 
from sklearn.metrics import mean_squared_error 
diabetes=load_diabetes() 
x=diabetes.data 
y=diabetes.target 
x_single=x[:,2].reshape(-1,1) 
x_train,x_test,y_train,y_test=train_test_split(x_single,y,test_size=0.2,random_state=42) 
model=LinearRegression() 
model.fit(x_train,y_train) 
y_pred=model.predict(x_test) 
mse=mean_squared_error(y_test,y_pred) 
print(f"Mean Squared Error on test set:{mse:.2f}") 
print(f"Intercept:{model.intercept_:.2f}") 
print(f"Cofficient:{model.coef_[0]:.2f}") 
plt.scatter(x_test,y_test,alpha=0.6,label='TestData') 
plt.plot(x_test,y_pred,color='red',label='Predicted regression line') 
plt.xlabel('BMI feature') 
plt.ylabel('Disease Progression') 
plt.title('Linear Regression on diabetes dataset') 
plt.legend() 
plt.show() 
new_BMI_values=np.array([[0.05],[0.10],[-0.02]]) 
new_predictions=model.predict(new_BMI_values) 
for bmi,pred in zip(new_BMI_values.flatten(),new_predictions):
    print(f"Predicted disease progression for BMI={bmi:.2f}:{pred:.2f}")
