let qty = document.querySelector('#qty'),
    product = document.querySelector('.pro')


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
            name : productOnly.querySelector('#nomm').textContent,
            img: productOnly.querySelector('#imgfirst').src,
            price: parseFloat(productOnly.querySelector('#price').textContent),
            id: parseInt(productOnly.getAttribute('data-id')),
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

    const count = () => {
        let products = getStorage();
        let nbre = 0;
        products.forEach(function(productInfo){
            nbre+=productInfo.n;
            // somme+=parseInt(productInfo.price)*parseInt(productInfo.n);
        });
        
        qty.textContent=nbre;
    }

    document.addEventListener('DOMContentLoaded',count);
    product.addEventListener('click', addToCart);
