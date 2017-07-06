from src import helpers

max = 0
for a in range(1, 100 + 1):
    for b in range(1, 100 + 1):
        c = sum(int(x) for x in str(a ** b))
        if c > max:
            max = c
helpers.solution(max)
