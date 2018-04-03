from flask import Flask
app = Flask(__name__)
import socket   #for sockets
import sys  #for exit
import threading, webbrowser, random


 
#create an INET, STREAMing socket
try:
    s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
except socket.error:
    print 'Failed to create socket'
    sys.exit()
   
     
print 'Socket Created'
 
host = 'www.google.com';
port = 80;
k=sys.argv[1]
 
try:
    remote_ip = k
 
except socket.gaierror:
    #could not resolve
    print 'Hostname could not be resolved. Exiting'
    sys.exit()
 
#Connect to remote server
s.connect((remote_ip , port))
 
print 'Socket Connected to ' + host + ' on ip ' + remote_ip
 
#Send some data to remote server
message = "GET / HTTP/1.1\r\n\r\n"
 
try :
    #Set the whole string
    s.sendall(message)
except socket.error:
    #Send failed
    print 'Send failed'
    sys.exit()
 
print 'Message send successfully'
 
#Now receive data
reply = s.recv(4096)
 
print reply

if __name__ == "__main__":
    
    port1 = 5000 + random.randint(0, 999)
    i='http://'+k
    url = i.format(port1)
    threading.Timer(1.25, lambda: webbrowser.open(url) ).start()

    app.run(port=port, debug=False)
