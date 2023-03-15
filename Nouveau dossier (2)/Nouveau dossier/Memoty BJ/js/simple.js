let qty = document.querySelector('#qty')

    const getStorage = () => {
        let products;
        if(localStorage.getItem('allemand-cart')===null)
            products = [];
        else
            products=  JSON.parse(localStorage.getItem('allemand-cart'));
        return products;
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