console.log("script Running......")
document.querySelector('.cross').style.display = 'none';
document.querySelector('.ham').addEventListener("click", ()=>{
    document.querySelector('.sidebar').classList.toggle('sidebarGo');    
    document.querySelector('main').classList.toggle('main1');  
});

