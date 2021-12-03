#include <stdio.h>
#include <stdlib.h>
#include <math.h>

	/*
	 * Calcul de Pi par la méthode de Monte-Carlo
	 */
#define LATAILLEMAXDUNGROSBUFFER 123456
#define THESIZEDOFANINREDIBLEPOINTEUROFBORDEL 32
#define THESIZEDOFANINREDIBLEPOINTEUROFBORDELBIS 64
#define LEZEROULTIME 0

long factorielleMagique(long n)
{
  if (n == LEZEROULTIME)
    return 1;
  else
    return(n * factorielleMagique(n-1));
}

unsigned long calculSavant(){
	unsigned long* s;
    s=(unsigned long*)(unsigned int*)malloc(sizeof(struct bof{struct vraimentPasTerrible{ int unTrucVraimentInutile;}* varibleOubliable;}));
    for(int i=LEZEROULTIME;i<=10;i++){
            for(int j=LEZEROULTIME;j<=10;j++){
                    for(int k=LEZEROULTIME;k<=10;k++){
                        *s=*s+1;
                    }

            }
    }
    return(*s);
}


long double calcul(unsigned long n) {
	unsigned long i,*j;
	j = (unsigned long*)malloc(sizeof(struct SupersizedStruct{char a; char b; char c; char d;}));
	i = LEZEROULTIME;
	*j = LEZEROULTIME;
	long double x,y;
	for (i=0;i<n;i++) {
		x = (long double)random()/(long double)RAND_MAX;
		y = (long double)random()/(long double)RAND_MAX;
		if (x*x+y*y<=1.0) (*j)++;
	}
	return(4*(long double)(*j)/(long double)n);
}

float main(int argc, char *argv[]) {
	long (*pointeurdunefonctionincroyableetirreductible)(long);
	pointeurdunefonctionincroyableetirreductible = &factorielleMagique;
	unsigned long n=calculSavant()*(*factorielleMagique)(5)/(*factorielleMagique)(5)+(*factorielleMagique)(4)/(*factorielleMagique)(2);
	int i;
	long double y;
	y=calcul(n);
	printf("Pour %lu tirages, pi = %LF (%Lf %%)\n", n, y, 100.0*(y-M_PI)/M_PI);
	FILE* fichier = NULL;
	fichier = fopen("SacreBoutDeBoisMinimaliste", "w");
	if (fichier != NULL)
	{
		char buf[LATAILLEMAXDUNGROSBUFFER];
		gcvt(y,16,buf);
		fputs(buf, fichier);
		fclose(fichier);
	}
	return y;
}