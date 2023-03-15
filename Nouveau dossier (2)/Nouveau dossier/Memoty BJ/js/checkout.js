



    const getStorage = () => {
        let products;
        if(localStorage.getItem('allemand-cart')===null)
            products = [];
        else
            products=  JSON.parse(localStorage.getItem('allemand-cart'));
        return products;
    }

    function addTostorage(info) {
        let products = getStorage();
        let niv = 0;

        products.forEach((productInfo) => {
            if(productInfo.name==info.name) {
                productInfo.n+=1; niv++;
            }
        });

        if(niv==0)
            products.push(info);

        localStorage.setItem('allemand-cart',JSON.stringify(products));
    }


    const getProductInfo = (productOnly) => {
        // console.log(productOnly)
        const productInfo = {
            name : productOnly.querySelector('.product-btm h4').textContent,
            img: productOnly.querySelector('.product-img').querySelector('img').src,
            price: parseFloat(productOnly.querySelector('.product-btm #price').textContent),
            id: parseInt(productOnly.querySelector('.single-product').getAttribute('data-id')),
            n: 1
        }

        console.log(productInfo);
        
        addTostorage(productInfo);
    }

    const addToCart = (e) => {
        e.preventDefault()
        var now = e.target.parentElement;
        if(now.classList.contains('pro-btn')) {
            qty.textContent=parseInt(qty.textContent)+1;
            getProductInfo(now.parentElement.parentElement.parentElement.parentElement);
        }
    }

    const  addProductToCart = (info) => {
        let products = getStorage();
        let somme = 0;
        let nbre = 0;
        let list1 = document.querySelector('#list1');
        let list2 = document.querySelector('#list2');

        let  hh = document.createElement('li');
        hh.innerHTML = `
            
                <a href="#">Product
                  <span>Total</span>
                </a>
            
        `;

        list1.appendChild(hh);

        products.forEach(function(productInfo){
            const tr = document.createElement('li');
            tr.setAttribute('class',productInfo.id);
            let sm = productInfo.price * productInfo.n;
            tr.innerHTML = `
            <a href="#">${productInfo.name}
                <span class="middle">x ${productInfo.n}</span>
                <span class="last">$${sm}</span>
            </a>
            `;
            somme+=parseInt(productInfo.price)*parseInt(productInfo.n);
            list1.appendChild(tr);

        });

        let  hh1 = document.createElement('li');
        hh1.innerHTML = `
        <a href="#">Subtotal
            <span>$${somme}</span>
        </a>
        `;

        let  hh2 = document.createElement('li');
        hh2.innerHTML = `
        <a href="#">Total
            <span>$${somme + 5}</span>
        </a>
        `;

        list2.appendChild(hh1);
        list2.appendChild(hh2);

        count();

        // sub.textContent=somme;
        // number.textContent=nbre;
        // qty.textContent=nbre;
    }

    const count = () => {
        let products = getStorage();
        let nbre = 0;
        products.forEach(function(productInfo){
            nbre+=productInfo.n;
            // somme+=parseInt(productInfo.price)*parseInt(productInfo.n);
        });
        
        qty.textContent=nbre;
    }

    // document.addEventListener('DOMContentLoaded',count);

    document.addEventListener('DOMContentLoaded',addProductToCart);
