def GCD(x,y):
	if x>y:
		small=y
	else:
		small=x
	for i in range(1,small+1):
		if((x%i==0)and (y%i==0)):
			gcd=i
	return gcd

num1 = input("marbel1 :-")
num2 = input("marbel2 :-")
print("total number of elements it can have is:--",GCD(num1,num2))