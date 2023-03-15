let qty = document.querySelector('.qty'),
    list = document.querySelector('.cart-list'),
    number = document.querySelector('#number'),
    sub = document.querySelector('#subtotal');
    product = document.querySelector('.pro'),
    pay = document.querySelector('.cart-dropdowna'),
    cart = document.querySelector('.panier'),
    etat = false;

    product.addEventListener('click',addToCart);
    list.addEventListener('click',deleted);
    cart.addEventListener('click',function(){
        if(etat==false) {
            pay.style.display="block";
            etat=true;
        }
        else {
            pay.style.display="none";
            etat = false;
        }
    });
    document.addEventListener('DOMContentLoaded',showFromStorage);

    function addToCart(e) {
        var now = e.target;
        if(now.classList.contains('add-to-cart-btn')) {
            qty.textContent=parseInt(qty.textContent)+1;
            number.textContent=parseInt(qty.textContent);
            getProductInfo(now.parentElement.parentElement);
        }
    }
    
    function getProductInfo(product) {
       const productInfo = {
           name : product.querySelector('.product-name').textContent,
           img: product.querySelector('.product-img').querySelector('img').src,
           price: product.querySelector('.product-body').querySelector('.price').textContent,
           id: parseInt(product.getAttribute('data-id')),
           n: 1
       }

       sub.textContent = parseInt(sub.textContent)+parseInt(product.querySelector('.product-body').querySelector('.price').textContent);

       addProductToCart(productInfo);
       addTostorage(productInfo);
    }

    function addProductToCart(info) {
        const newP = document.createElement('div');
            newP.setAttribute('class','product-widget');

        newP.innerHTML = `
            <div class="product-img"><img src="${info.img}" alt=""></div>
            <div class="product-body">
                <h3 class="product-name"><a href="#">${info.name}</a></h3>
                <h4 class="product-price"><span id="qty">1x €</span><span class="p">${info.price}</span></h4>
            </div>
            <button class="delet" data-id="${info.id}">X</button>
        `;
        list.appendChild(newP);
        // addTostorage(info);
        // alert("Produit ajouter");
    }

    function getStorage() {
        let products;
        if(localStorage.getItem('vortexshop')===null)
            products = [];
        else
            products=  JSON.parse(localStorage.getItem('vortexshop'));
        return products;
    }

    function addTostorage(info) {
        let products = getStorage();
        let niv = 0;

        products.forEach(function(productInfo){
            if(productInfo.name==info.name) {
                productInfo.n+=1; niv++;
            }
        });

        if(niv==0)
            products.push(info);

        localStorage.setItem('vortexshop',JSON.stringify(products));
    }

    function deleted(e) {
        let nowi = e.target;
        if(nowi.classList.contains('delet')) { 
            if(parseInt(nowi.parentElement.querySelector('.product-body').querySelector('.product-price').querySelector('#qty').textContent) > 1)
            {
                nowi.parentElement.querySelector('.product-body').querySelector('.product-price').querySelector('#qty').textContent = parseInt(nowi.parentElement.querySelector('.product-body').querySelector('.product-price').querySelector('#qty').textContent)-1+"x €";
            }
            else 
                nowi.parentElement.remove();
                sub.textContent = parseInt(sub.textContent)-parseInt(nowi.parentElement.querySelector('.product-body').querySelector('.product-price').querySelector('.p').textContent);
                qty.textContent = parseInt(qty.textContent)-1;
                number.textContent = parseInt(qty.textContent);
            deleteFromSorage(nowi.parentElement);
        }
    }

    function deleteFromSorage(product) {
        let id = product.querySelector('.delet').getAttribute('data-id');
        let products = getStorage();
        // alert(id);
        products.forEach(function(produit,index){
            if(produit.id==id) {
                if(produit.n>1) {
                    produit.n-=1;
                }
                else
                   products.splice(index,1);
            }

            localStorage.setItem('vortexshop',JSON.stringify(products));
        });
        // showFromStorage();
    }

    function showFromStorage() {
        let products = getStorage();
        let somme = 0;
        let nbre = 0;
        products.forEach(function(productInfo){
            const newP = document.createElement('div');
            newP.setAttribute('class','product-widget');
        newP.innerHTML = `
            <div class="product-img"><img src="${productInfo.img}" alt=""></div>
            <div class="product-body">
                <h3 class="product-name"><a href="#">${productInfo.name}</a></h3>
                <h4 class="product-price"><span id="qty">${productInfo.n}x €</span><span class="p">${productInfo.price}</span></h4>
            </div>
            <button class="delet" data-id="${productInfo.id}">X</button>
        `;
        nbre+=productInfo.n;
        somme+=parseInt(productInfo.price)*parseInt(productInfo.n);
        list.appendChild(newP);
        });
        sub.textContent=somme;
        number.textContent=nbre;
        qty.textContent=nbre;
    }