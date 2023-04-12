## About You.

 1. Introduce yourself.

    Hello, my name is Joshna Joy. I am originally from Thrissur. I am an engineering graduate specialized in computer science engineering.
    I graduated from Nirmala college of engineering chalakudy and have an overall cgpa of 8.41.
    I am currently working as agraduate enigineer trainee at cochin shipyard limited.

 2. Describe your development environment. (Your OS, IDE, Editor and Config manager if any)

    My primary operating system is operating system is windows for testing and debugging purposes.
    For my IDE,  I use Visual Studio Code as a lightweight editor for quick edits and smaller projects.
    Finally, I start to use Git as my configuration manager for version control. 

    ## Social Profile
 1. Your Github profile url.

    github.com/JoshnaGit

 2. LinkedIn profile.

    linkedin.com/in/joshna-joy-152424201

 3. Personal website, blog or something you want us to see.

    Nil.

    ## The real stuff.
 1. Which all programming languages are installed on your system.

    Python, PHP

2. Write a function that takes a number and returns an array of its digits.

def get_digits(number):
    digits = []
    while number > 0:
        digits.append(number % 10)
        number //= 10
    digits.reverse()
    return digits

3.Write function that translates a text to Pig Latin and back. English is translated to Pig Latin by taking the first letter of every word, moving it to the end of the word and adding ‘ay’. “Join with yellowfish” becomes “oinjay ithway ellowfishyay”.
  




 4.Write a function that rotates an array by k elements. For example [1,2,3,4,5,6] rotated by two becomes [3,4,5,6,1,2]. Try solving this without creating a copy of the array.

def rotate_array(arr, k):
    
    n = len(arr)
    k = k % n  
    reverse(arr, 0, n-1)
    reverse(arr, 0, k-1)
    reverse(arr, k, n-1)

def reverse(arr, start, end):
    
    while start < end:
        arr[start], arr[end] = arr[end], arr[start]
        start += 1
        end -= 1

