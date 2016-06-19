function toggleMenu()
{
    if(typeof toggleMenu.status == 'undefined')
    {
        toggleMenu.status = 0; //Menu is closed
    }
    if(toggleMenu.status == 0) //i.e. Menu is closed, open it
    {
        var listOfItems = document.getElementById("menubar").getElementsByTagName("li");
        //Items 1 and 2 are accounted for
        var counter = 2;
        while(counter < 8)
        {
            listOfItems[counter].style.display="block";
            counter++;
        }
        toggleMenu.status = 1; //We are in business!
    }
    else    //Bring it down
    {
        var listOfItems = document.getElementById("menubar").getElementsByTagName("li");
        //Items 1 and 2 are accounted for
        var counter = 2;
        while(counter < 8)
        {
            listOfItems[counter].style.display="none";
            counter++;
        }
        toggleMenu.status = 0; //We closing shop!
    }
}
window.onresize = function()
{
    if(window.innerHeightHeight > 736 || window.innerWidth > 414)
    {
        var listOfItems = document.getElementById("menubar").getElementsByTagName("li");
        //Items 1 and 2 are accounted for
        var counter = 2;
        while(counter < 8)
        {
            listOfItems[counter].style.display="inline-block";
            counter++;
        }
        toggleMenu.status = 1; //We are in business!
    }
    else
    {
        var listOfItems = document.getElementById("menubar").getElementsByTagName("li");
        //Items 1 and 2 are accounted for
        var counter = 2;
        while(counter < 8)
        {
            listOfItems[counter].style.display="none";
            counter++;
        }
        toggleMenu.status = 0; //We closing shop!
    }
}