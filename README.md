# LFG-CPSC-362

## Bubble Install Document

Since our website uses databases, php is needed to connect the database along with the front end of the website. In order to run files with php extension, an apache server is needed. 

### 1. Head over to https://www.apachefriends.org/index.html and install xampp

![d80db9c03afd3bc0cfe64efe959be3f6](https://user-images.githubusercontent.com/31262157/39280409-29f662f0-48b4-11e8-8b26-0e1b52fd9f32.png)


### 2. Once installed go ahead and open the application if it is not already opened. Go ahead and press the start buttons on the right side of Apache and mySQL

![93efb589a9d294ed77113e2ba4e73c74](https://user-images.githubusercontent.com/31262157/39280430-40f63c28-48b4-11e8-9c58-34f54eed9546.png)

### 3. Once XAMPP is installed and the servers are up and running head over to https://www.phpmyadmin.net and download “phpmyadmin.” Click on the download button located at the top right of the website.

![33b4155e7fe4f998a3b4dfda70c97e36](https://user-images.githubusercontent.com/31262157/39280441-4e19fc50-48b4-11e8-85fa-ad506b57998f.png)

- After downloading go ahead and extract it to your “documents” folder with any zip extractor tool. In my case I used winrar.


### 4. After that is done. Head to your browser of choice and type “localhost/phpmyadmin” 
This will take you to a page that looks similar to the image below

![49594bfed04249f792316505d5114a59](https://user-images.githubusercontent.com/31262157/39280508-a61419ea-48b4-11e8-86f9-efb450970566.png)

### 5. In order for you to have the same database that is used by the php, you will first need to create a new database and name is “bubbleDB” Go ahead and click “New” located on the right of the phpmyadmin site. 

- Then fill out the “Database name” with “bubbleDB”  and showed in the image below and hit “create”
 

![314bbc42de2239bbd7ed79dc018d2831](https://user-images.githubusercontent.com/31262157/39280560-e3f9695e-48b4-11e8-9726-3e861a677717.png)
![55ca08dc0f6ae9c377a60ea8f292823b](https://user-images.githubusercontent.com/31262157/39280546-d7085e62-48b4-11e8-80cf-78ac03d49dba.png)


### 6. Once the database is created you will need to import the sql code into the database. 
- Head over to this link https://github.com/cirjeffrey/LFG-CPSC-362/blob/master/bubbledb.sql
- Simply copy and paste the code and in phpMyAdmin click on bubbledb and click on the SQL tab.

![47dd258657f16f21e72b6a2ea673be4f](https://user-images.githubusercontent.com/31262157/39280349-a4f5d270-48b3-11e8-88ca-193f4898b694.png)

### 7. Paste the code you copied earlier in the text box below and click go as shown in the bottom right of the image below.
- You should be received with green messages saying the queries were a success.

![2be689fbfceefdbedab8d6cb647a7f91](https://user-images.githubusercontent.com/31262157/39280621-4145bfc2-48b5-11e8-9a6d-588d95fee8eb.png)



### 8. The only thing left to do is download the github repository.
- https://github.com/cirjeffrey/LFG-CPSC-362

- Then you can search your computer for the “xampp” folder and in it locate the “htdocs” folder.
- This is where the extraction of the github repository should go. 

### 9. Finally to access these files and show them in the browser. Simply head over to a new tab and type in localhost followed by the path of the file in htdocs.
    - For example “localhost/bubble/login.php”

