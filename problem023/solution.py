from src import helpers


def divisors(num):
    divisor = [1]
    x = 2
    while 2 * x <= num:
        if num % x == 0:
            divisor.append(x)
        x += 1
    return divisor


def is_abundant(num):
    return sum(divisors(num)) > num


# Calculate list of abundant numbers below threshold
abundants = [x for x in range(1, 28124) if is_abundant(x)]

# Calculate all sums of two abundant numbers
sums = set()
for x in abundants:
    for y in abundants:
        sums.add(x + y)

nonabundant_sums = [x for x in range(1, 28124) if x not in sums]

helpers.solution(sum(nonabundant_sums))
