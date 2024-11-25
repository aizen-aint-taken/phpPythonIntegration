import urllib.request

url = "http://localhost/pyphp/"
print(url)
try:
    page = urllib.request.urlopen(url)
    content = page.read().decode('utf-8')  
    print("Response from PHP server:")
    # print(content)
except Exception as e:
    print(f"An error occurred: {e}")
