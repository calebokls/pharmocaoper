


var dd=document.querySelector('.table-product');

const  deleteFromSorage = (product) => {
    // let id = product.querySelector('.delet').getAttribute('data-id');
    let products = getStorage();
    // alert(id);
    products.forEach(function(produit,index){
        if(produit.nom==product) {
            products.splice(index,1);
        }

        localStorage.setItem('allemand-cart',JSON.stringify(products));
    });
    // showFromStorage();
}

dd.addEventListener('click', (e) => {
    // console.log(e.target)
    if(e.target.classList.contains('delete')) {
        let  de = e.target.parentElement.parentElement.querySelector('nomm');
        deleteFromSorage(de);
        e.target.parentElement.parentElement.remove();
        document.location.href="cart.php";
    }
});

    function editStorageplus(info) {
        let products = getStorage();
        let niv = 0;

        products.forEach((productInfo) => {
            if(productInfo.name==info) {
                productInfo.n+=1; niv++;
            }
        });

        localStorage.setItem('allemand-cart',JSON.stringify(products));

    }

    function editStoragemoins(info) {
        let products = getStorage();
        let niv = 0;

        products.forEach((productInfo) => {
            if(productInfo.name==info) {
                productInfo.n-=1; niv++;
            }
        });

        localStorage.setItem('allemand-cart',JSON.stringify(products));

    }



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
        let list = document.querySelector('.table-product');

        const newP = document.createElement('tbody');
            newP.setAttribute('class','product-widget');
        products.forEach(function(productInfo){
            const tr = document.createElement('tr');
            tr.setAttribute('class',productInfo.id);
            let sm = productInfo.price * productInfo.n;
            tr.innerHTML = `
                    <td>
                    <div class="media">
                        <div class="d-flex">
                        <img
                            src="${productInfo.img}"
                            alt=""
                            width="100"
                        />
                        </div>
                        <div class="media-body">
                        <p class="nomm">${productInfo.name}</p>
                        </div>
                    </div>
                    </td>
                    <td>
                    <h5>$<span class="price-product">${productInfo.price}</span></h5>
                    </td>
                    <td>
                    <div class="product_count">
                        <input
                        type="text"
                        name="qty"
                        id="sst"
                        maxlength="12"
                        value="${productInfo.n}"
                        title="Quantity:"
                        class="input-text qty"
                        />
                        <button
                        onclick="var re = this.parentElement.parentElement.parentElement; var result = re.querySelector('#sst'); var sst = result.value; if( !isNaN( sst )){ result.value++; 
                            re.querySelector('.product-total').textContent= parseInt(re.querySelector('.product-total').textContent) + parseInt(re.querySelector('.price-product').textContent) 
                            re.parentElement.querySelector('#subtotal').textContent= parseInt(re.parentElement.querySelector('#subtotal').textContent) + parseInt(re.querySelector('.price-product').textContent)} editStorageplus(re.querySelector('.nomm').textContent);  return false;"
                        class="increase items-count"
                        type="button"
                        >
                        <i class="lnr lnr-chevron-up"></i>
                        </button>
                        <button
                        onclick="var re = this.parentElement.parentElement.parentElement; var result = re.querySelector('#sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ){ result.value--; 
                            re.querySelector('.product-total').textContent= parseInt(re.querySelector('.product-total').textContent) - parseInt(re.querySelector('.price-product').textContent)
                            re.parentElement.querySelector('#subtotal').textContent= parseInt(re.parentElement.querySelector('#subtotal').textContent) - parseInt(re.querySelector('.price-product').textContent)} return false;"
                        class="reduced items-count"
                        type="button"
                        >
                        <i class="lnr lnr-chevron-down"></i>
                        </button>
                    </div>
                    </td>
                    <td>
                    <h5>$ <span class="product-total">${sm}</span></h5>
                    </td>
                    <td>
                        <button class="btn btn-danger delete">X</span></button>
                    </td>
            `;
            somme+=parseInt(productInfo.price)*parseInt(productInfo.n);
            newP.appendChild(tr);

        });

        const ligne1 = document.createElement('tr');
        ligne1.innerHTML= `
            <td></td>
            <td></td>
            <td></td>
            <td>
            <h5>Subtotal</h5>
            </td>
            <td>
            <h5>$ <span id="subtotal">${somme}</span></h5>
            </td>
        `;
        const ligne2 = document.createElement('tr');
        ligne2.innerHTML= `
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
            <div class="checkout_btn_inner">
                <a class="main_btn" href="checkout.php">Proceed to checkout</a>
            </div>
            </td>
        `;

        // const tbody = document.querySelector('.product-widget');

        newP.appendChild(ligne1);
        newP.appendChild(ligne2);

        list.appendChild(newP);

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
