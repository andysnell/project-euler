import math

f = [math.factorial(x) for x in range(0, 10)]
counter = 0
total = 0
i = 3
while i < 1000000:
    if i == sum([f[int(x)] for x in str(i)]):
        counter += 1
        total += i
        print(total)

    i += 1
