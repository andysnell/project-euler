
index = 2
current_fib = 1
previous_fib = 1

while len(str(current_fib)) < 1000:
    index += 1
    next_fib = current_fib + previous_fib
    previous_fib = current_fib
    current_fib = next_fib

print(index)