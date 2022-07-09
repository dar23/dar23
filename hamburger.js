const hamburger=document.querySelector('.hamburger');


    const hamburger_child_one= hamburger.children[0];
    const hamburger_child_two= hamburger.children[1];
    const hamburger_child_three= hamburger.children[2];


hamburger.addEventListener('click', ()=>{
  
    const menu= document.querySelector('nav>ul');

        hamburger_child_three.classList.toggle('hamburger_three_3');
        hamburger_child_one.classList.toggle('hamburger_one_1')
        hamburger_child_two.classList.toggle('hamburger_two_2');
        menu.classList.toggle('class_open');

})


