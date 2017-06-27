/* Project Euler Problem 21 */
#include <stdio.h>

int divisor_sum(int i);

int main(void)
{
    int i;
    int sum = 0;
    int divisors;

    for(i = 1; i < 10000; i++){
        divisors = divisor_sum(i);
        if((i != divisors) && divisor_sum(divisors) == i){
            sum = sum + i;
	}
    }

    printf("Solution: %d\n", sum);
    return 0;
}

int divisor_sum(int i)
{
    int j;
    int sum = 0;
    for(j = 1; j <= i / 2; j++){
        if(i % j == 0) {
            sum = sum + j;
        }
    }
    return sum; 
}
