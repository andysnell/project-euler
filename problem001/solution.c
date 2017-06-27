#include <stdio.h>

int main(void)
{
    int x, sum;
    
    for(x = 1, sum = 0; x < 1000; x++){
        if(x % 3 == 0 || x % 5 == 0) {
            sum += x;
        }
    }

    printf("Solution: %d\n", sum);
    return 0;
}