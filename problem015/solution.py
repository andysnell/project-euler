from src import helpers

# The number of lattice paths from (0,0)} to (n,k) is equal to the binomial
# coefficient (n + k choose k). We can use the multiplicative formula to
# calculate the coefficient.

n = 20
k = 20
paths = 1

for i in range(1, k + 1):
    paths *= ((n + k) + 1 - i) / i

helpers.solution(int(paths))
