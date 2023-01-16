# mlinks <img src="bits/favicon.ico" alt="favicon" height="30px"/>
*- Store all your links at one place* <br>

![](https://komarev.com/ghpvc/?username=mnk17arts&color=orange&label=PROJECT+VIEWS)


## Project Demo Video 
https://user-images.githubusercontent.com/71878747/212629129-227f86e5-31c1-4f65-a8e7-65abf5204e1d.mp4


## About this project

## How to Contribute ??*- (Here I'm using xampp software )*
### step-1. Fork this Repository
+ Find the project's repository on GitHub, and then `fork` it by clicking the Fork button in the upper right corner: 
![fork](https://user-images.githubusercontent.com/71878747/131992866-8d9a25bb-4788-4e42-a222-9439103c848f.png)
+ This creates a copy of the project repository in your GitHub account. In the upper left corner, you will see that you are now looking at a repository (`<your username>/mlinks`) in your account:<br>
![forked repo](https://user-images.githubusercontent.com/71878747/131992905-fb256031-4484-43bc-9072-658890c473f0.png)

### step-2. Clone your fork
+ While still in your repository, click the green `Code` button and then copy the HTTPS URL:
![clone fored repo](https://user-images.githubusercontent.com/71878747/131993972-733c8a93-bf09-4fb7-a012-e5a68ad8f9f0.png)
+ Using Git on your local machine, clone your fork using the URL you just copied: `git clone URL_OF_FORK`.
+ For example, I used `git clone https://github.com/mnk17arts/mlinks.git`.
+ Cloning copies the repository files (and commit history) from GitHub to your local machine. The repository will be downloaded into a subdirectory of your working directory, and the subdirectory will have the same name as the repository.<br>
(If you run into problems during this step, read the [Set up Git](https://help.github.com/en/github/getting-started-with-github/set-up-git) page from GitHub's documentation.)

### step-3. Navigate to your local repository
+ After navigating to your local repository copy `bits` folder, `index.php`, `mylinks.php`, `about.php` and `contact.php` files.
+ Next open your `htdocs` folder (Which is present in the `xampp` folder. If you dont have `xampp` software , install it firstly) and create a folder named `mlinks`.
+ Now paste the files we copied, in this folder. 
+ Go to [phpmyadmin](https://localhost/phpmyadmin/) , create a database named `mlinks` and import `mlinks.sql` from your local repository. Then you can see two tables (**links** and **users**)

> **Your local repo**   
> -------------------
>  ***PATH/mlinks***   
>  ------------------
>  *.git  
>  .github  
>  bits   
>  about.php   
>  contact.php   
>  index.php   
>  mlinks.sql   
>  mylinks.php   
>  README.md*  
   
> **In xampp folder**   
> -------------------
>  ***PATH/htdocs/mlinks***  
>  ----------------------  
>  *bits   
>  about.php   
>  contact.php   
>  index.php     
>  mylinks.php* 

> **phpmyadmin**  
> -------------- 
>  `mlinks`   (database)   
>     + `links`   (table)    
>     + `users`   (table) 

> ***links***    

| sno | link_title | link_url | link_id | dt |
 | -- | -- | -- | -- | -- |     
 
> ***users***     

| sno | username | name | pwd | dt |
 | -- | -- | -- | -- | -- |

### step-4. Contribute
+ Now you can work on the things which you wanted to contribute. Please work on the folder `mlinks` which is in `htdocs` only, so you can view your [live project](https://localhost/mlinks) time to time. (Open your Code IDE in this `mlinks` folder) 

### step-5. Commit your changes
+ Replace the respective files in the local repository with files (you worked on) from the `mlinks` folder in `htdocs`.
+ After you make a set of changes, use git add -A to stage your changes and git commit -m "DESCRIPTION OF CHANGES" to commit them.
+ For example, I used `git commit -m "added this new feature"` for one of my commits.<br>If you are making multiple sets of changes, it's a good practice to make a commit after each set.

### step-6. Push your changes to your fork
+ When you are done making all of your changes, upload these changes to your fork using `git push origin BRANCH_NAME`. This `pushes` your changes to the `BRANCH_NAME` branch of the `origin` (which is your fork on GitHub).
+ For example, I used `git push origin doc-fixes`.

### step-7. Begin the pull request
+ Return to your fork on GitHub, and refresh the page. You may see a highlighted area that displays your recently pushed branch:
![comit](https://user-images.githubusercontent.com/71878747/131998981-6a3bb57f-0948-4284-b177-727998e12718.png)
+ Click the green ***Compare & pull request*** button to begin the pull request.<br> (Alternatively, if you don't see this highlighted area, you can switch to your ***branch*** using the Branch button and then click the ***New pull request*** button.)

### step-8. Create the pull request
+ When opening a `pull request`, you are making a ***request*** that the project repository `pull` changes from your fork. You will see that the project repository is listed as the `base repository`, and your fork is listed as the `head repository`:
![open pull request](https://user-images.githubusercontent.com/71878747/131999906-ce35b5ca-517b-489b-8cd7-c1ff989009fb.png)
+ Before submitting the pull request, you first need to describe the changes you made (rather than asking the project maintainers to figure them out on their own). You should write a descriptive title for your pull request, and then include more details in the body of the pull request. If there are any related GitHub issues, make sure to mention those by number. The body can include Markdown formatting, and you can click the `Preview` tab to see how it will look.
+ On the right side, you may see a link to the project's `Contributing` guidelines. This is primarily worth reading through if you are submitting substantial code (rather than just fixing a typo), but it may still be worth scanning through at this point.
+ Below the pull request form, you will see a list of the commits you made in your branch, as well as the "diffs" for all of the files you changed.
+ If everything looks good, click the green `Create pull request` button!

### Step-9. Review the pull request
+ You have now created a pull request, which is stored in the project's repository (not in your fork of the repository). It's a good idea to read through what you wrote, as well as clicking on the `Commits` tab and the `Files changed` tab to review the contents of your pull request:
![review](https://user-images.githubusercontent.com/71878747/132000748-0ef30590-0f1d-4a08-b82e-7d7876ff2ae0.png)
+ If you realize that you left out some important details, you can click the 3 dots in the upper right corner to edit your pull request description.

### Step-10. Add more commits to your pull request
+ You can continue to add more commits to your pull request even after opening it! For example, the project maintainers may ask you to make some changes, or you may just think of a change that you forgot to include:
![more commits](https://user-images.githubusercontent.com/71878747/132001006-e97644ae-9e3c-4e4d-ac15-e4583506dffe.png)
+ Start by returning to your local repository, and use git branch to see which branch is currently checked out. If you are currently in the master branch (rather than the branch you created), then use git checkout BRANCH_NAME to switch. For example, I used git checkout doc-fixes.
+ Then, you should repeat steps 9 through 11: make changes, commit them, and push them to your fork.
+ Finally, return to your open pull request on GitHub and refresh the page. You will see that your new commits have automatically been added to the pull request:
![discuss pr](https://user-images.githubusercontent.com/71878747/132001134-9810d4e5-25b4-4231-966f-8fe6d41372ed.png)
+ If there are inline comments about specific changes you made, you can respond to those as well:
![resolve convo](https://user-images.githubusercontent.com/71878747/132001324-25b4e262-94d3-44c5-9e6b-bc0c9790becb.png)
+ Click the `Resolve conversation` button once you have addressed any specific requests.

### Step-11. Delete your branch from your fork
+ If the project maintainers accept your pull request (congratulations!), they will merge your proposed changes into the project's master branch and close your pull request:
![delete branch](https://user-images.githubusercontent.com/71878747/132001559-2b29affd-8dc0-4b8b-b924-617168bdf1cc.png)
+ You will be given the option to delete your branch from your fork, since it's no longer of any use:
![delete branch 2](https://user-images.githubusercontent.com/71878747/132001701-1b82c967-ca55-4df2-9cc6-c529d0dfc594.png)
+ Click the `Delete branch` button:
![db3](https://user-images.githubusercontent.com/71878747/132002281-19398bec-462d-45ff-b57b-7493e820fc33.png)

### Step-12. Delete your branch from your local repository
+ You should also delete the branch you created from your local repository, so that you don't accidentally start working in it the next time you want to make a contribution to this project.
+ First, switch to the master branch: `git checkout master`.
+ Then, delete the branch you created: `git branch -D BRANCH_NAME`. For example, I used `git branch -D doc-fixes`.

