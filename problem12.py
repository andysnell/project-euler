import math


def get_divisors(n):
    divisors = 0
    max = math.sqrt(n)
    i = 1
    while i <= max:
        if n % i == 0:
            divisors += 2
        i += 1
    return divisors

triangle = 1
counter = 2
testing = True

while testing:
    if get_divisors(triangle) >= 500:
        print(triangle)
        testing = False
    triangle += counter
    counter += 1