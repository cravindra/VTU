#include<iostream>
#include<cstdio>
#include<string.h>
using namespace std;

long p,q,n,t,e,d;
void printArray(long *x)
{
	for(int i=0;x[i]!=-1;i++)
		cout<<"\t"<<x[i];
}
/*
void printArray(char *x)
{
	int i;
	for(i=0;x[i]!='\0';i++)
		cout<<"\t"<<(int)x[i];
	cout<<(int)x[i];
}
*/

long modPow(long x, long n,long mod)
{

	if(x==0) return 0;
	else if(n==0) return 1;
	
	int res=1;
	for(int i=0;i<n;i++)
	{
		res*=x;
		res%=mod;
	}
	return res;

}

long gcd(int m,int n)
{
	int r;
	while(n>0)
	{
		r=m%n;
		m=n;
		n=r;
	}
	return m;
}


void initKeys()
{
	for(int i=2;i<t;i++)
	{
		if(gcd(t,i)==1 && i!=p && i!=q)
		{
			e=i;
			break;
		}
	}
	for(int i=1;;i++)
	{
		if((i*e)%t==1)
		{
			d=i;
			break;
		}
	}
}

void initialize()
{
	cout<<"\nEnter values for p and q :";
	cin>>p>>q;
	
	n=p*q;
	t=(p-1)*(q-1);
	initKeys();
	
	
}

long* encrypt(char *msg)
{
	int len=strlen(msg);
	
	long *m=new long[len+2];
	//strcpy(m,msg[i]);
	//cout<<"\nin ecrypt(): ";printArray(msg);
	for(int i=0;i<len;i++)
	{
		
		//m[i]=((long)pow((long)msg[i],e)%n);
		m[i]=modPow(msg[i],e,n);
		//cout<<"\ni="<<i<<" msg[i]="<<(long)msg[i]<<" e="<<e<<" n="<<n<<" msg^e="<<(long)pow((long)msg[i],e)<<" m[i]="<<m[i]<<endl;
	}
	
	m[len+1]=-1;
	//cout<<"\nin ecrypt(): ";printArray(m);
	return m;
	
}

char* decrypt(long *ctext)
{
	
	int len;
	for(len=0;ctext[len]!=-1;len++);
	char *m=new char[len];
	//stpcpy(m,msg[i]);
	//cout<<"\nin decrypt(): ";printArray(ctext);
	for(int i=0;ctext[i]!=-1;i++)
	{
		//m[i]=((long int)pow(ctext[i],d)%n);
		m[i]=modPow(ctext[i],d,n);
		//cout<<"\ni="<<i<<" ctext[i]="<<(long)ctext[i]<<" d="<<d<<" n="<<n<<" ctext^d="<<(long)pow((long)ctext[i],d)<<" m[i]="<<m[i]<<endl;
	}
	
	//cout<<"\nin decrypt(): ";printArray(m);
	return m;
}
int main()
{
	initialize();
	char message[100];
	cin>>message;
	long *encpt=encrypt(message);
	char *decpt=decrypt(encpt);
	cout<<"\np="<<p<<" q="<<q<<"\nn="<<n<<" t="<<t<<"\ne="<<e<<" d="<<d<<endl;
	cout<<"\nMSG: "<<message;
		//<<"\nInput message: ";printArray(message);
	cout<<"\nEncrypted: ";printArray(encpt);
	cout<<"\nDecrypted: "<<(decpt)<<endl;
	
	return 0;
}
	
