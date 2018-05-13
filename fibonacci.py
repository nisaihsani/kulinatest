fibnum = int(input("Berapa banyak angka Fibonacci yang ingin ditampilkan? "))

def fibonacci(n):
	if n < 0:
		print("Masukkan bilangan bulat positif")
	elif n == 1:
		return 0
	elif n == 2:
		return 1
	else:
		return fibonacci(n-1) + fibonacci(n-2)

for x in range(1,fibnum+1):
	print(fibonacci(x))
