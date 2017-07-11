def coprime10(x):
    return x % 2 and x % 5


def order(x):
    for i in range(1, 1000):
        if (10 ** i) % x == 1:
            return int(i)


solution = 0
maximum = 0

for i in [i for i in range(2, 1001) if coprime10(i)]:
    m = order(i)
    if m > maximum:
        solution = i
        maximum = m

print(solution)
