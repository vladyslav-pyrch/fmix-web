To build styles run   
`npm install -i`  
And run   
`npx tailwindcss -i ./src/input.css -o ./src/output.css --watch`
To update styles in real time. Do not edit output.css.  
To build docker image run  
`docker build -t fmix-web .`  
To run docker container run  
`docker run -d -p 5000:80 --name fmix-web fmix-web`  
To stop docker container run  
`docker kill fmix-web`  
or  
`docker stop fmix-web`  
To remove container run  
`docker rm fmix-web`