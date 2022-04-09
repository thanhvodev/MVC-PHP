<div class="input-spinner">
    <button id="sub">-</button>
    <input type="text" id="qtyBox" value="1">
    <button id="add">+</button>
</div>
<script type="text/javascript">
    let addBtn = document.querySelector('#add');
    let subBtn = document.querySelector('#sub');
    let qty = document.querySelector('#qtyBox');
    
    addBtn.addEventListener('click', ()=>{
        qty.value = parseInt(qty.value) + 1;
    });

    subBtn.addEventListener('click',()=>{
        if (qty.value <= 1) {
            qty.value = 1;
        }
        else{
            qty.value = parseInt(qty.value) - 1;
        }
    });
</script>