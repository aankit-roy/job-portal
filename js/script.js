const sortBtns=document.querySelectorAll('.job-id> *');
const sortItems= document.querySelectorAll('.jobs-container> *');


sortBtns.forEach(btn=>{
    btn.addEventListener('click',()=>{
        sortBtns.forEach(btn=>{
            btn.classList.remove('active');
        })
        btn.classList.add('active');
        const targetData= btn.getAttribute('data-target');
        sortItems.forEach(item=>{
            item.classList.add('delete');
            const itemData= item.getAttribute('data-item')
            if(itemData===targetData || targetData==='all'){
                item.classList.remove('delete');
            }
        });
    });
});
