import random
cont=1
while(cont==1):
    a = int (input ("enter the lower limit :"))
    b = int (input ("enter the upper limit :"))
    list = [ ]
    for i in range (a , b , 1) :
        list.append (i)
    ran = random.choice (list)
    print ("you have only 5 attempts.....")
    print (ran)
    n = 5
    for i in range (n , 0 , -1) :
        c = int (input ("choose any number :"))
        if (c == ran) :
            print ("you choose correct number")
            break ;
        elif (c > ran) :
            print ("your number is too big")
        else :
            print ("your number is too small")

    else :
        print ("better luck next time")
    print("if you want if continue press 1:")
    cont=int(input())