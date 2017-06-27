sum <- 0
for(x in 1:999) {
  if( (!x %% 3) || (!x %% 5) ) {
    sum <- sum + x
  }
}
print(sum)
