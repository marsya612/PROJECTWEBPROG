const buttonAdd1 = document.getElementById('button-add-1');
const buttonMinus1 = document.getElementById('button-sub-1');

buttonAdd1.addEventListener('click', function () {
    const qty = document.getElementById('qty-1');
    qty.value = parseInt(qty.value) + 1;
    if (qty.value > 14) {
        qty.value = 14;
        alert('Maximum quantity is 14');
    }
    buttonMinus1.removeAttribute('disabled');
})

// trigger id = #button-minus to minus qty
buttonMinus1.addEventListener('click', function () {
    const qty = document.getElementById('qty-1');
    if (qty.value > 1) {
        qty.value = parseInt(qty.value) - 1;
    }
    if (qty.value === 1) {
        buttonMinus1.setAttribute('disabled', 'disabled');
        alert('Minimum quantity is 1');
    }
})


// trigger id = #button-add to add qty
const buttonAdd2 = document.getElementById('button-add-2');
const buttonMinus2 = document.getElementById('button-sub-2');

buttonAdd2.addEventListener('click', function () {
    const qty = document.getElementById('qty-2');
    qty.value = parseInt(qty.value) + 1;
    if (qty.value > 14) {
        qty.value = 14;
        alert('Maximum quantity is 14');
    }
    buttonMinus2.removeAttribute('disabled');
})

// trigger id = #button-minus to minus qty
buttonMinus2.addEventListener('click', function () {
    const qty = document.getElementById('qty-2');
    if (qty.value > 1) {
        qty.value = parseInt(qty.value) - 1;
    }
    if (qty.value === 1) {
        buttonMinus2.setAttribute('disabled', 'disabled');
        alert('Minimum quantity is 1');
    }
})

// trigger id = #button-add to add qty
const buttonAdd3 = document.getElementById('button-add-3');
const buttonMinus3 = document.getElementById('button-sub-3');

buttonAdd3.addEventListener('click', function () {
    const qty = document.getElementById('qty-3');
    qty.value = parseInt(qty.value) + 1;
    if (qty.value > 14) {
        qty.value = 14;
        alert('Maximum quantity is 14');
    }
    buttonMinus3.removeAttribute('disabled');
})

// trigger id = #button-minus to minus qty
buttonMinus3.addEventListener('click', function () {
    const qty = document.getElementById('qty-3');
    if (qty.value > 1) {
        qty.value = parseInt(qty.value) - 1;
    }
    if (qty.value === 1) {
        buttonMinus3.setAttribute('disabled', 'disabled');
        alert('Minimum quantity is 1');
    }
})



// Function to calculate total based on quantity and update HTML
function calculateAndUpdateTotal() {
    let total = 0;

    for (let i = 1; i <= 3; i++) {
        const qtyElement = document.getElementById(`qty-${i}`);
        const quantity = parseInt(qtyElement.value);
        total += quantity * 375000; // Mengganti dengan harga sesuai dengan produk Anda
    }

    const totalElement = document.getElementById('total-price');
    totalElement.textContent = `Rp${total.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}`;
}

// Menambahkan event listener ke semua button-add dan button-minus
for (let i = 1; i <= 3; i++) {
    const buttonAdd = document.getElementById(`button-add-${i}`);
    const buttonMinus = document.getElementById(`button-sub-${i}`);

    buttonAdd.addEventListener('click', function () {
        updateQuantityAndTotal(this, 1);
        calculateAndUpdateTotal();
    });

    buttonMinus.addEventListener('click', function () {
        updateQuantityAndTotal(this, -1);
        calculateAndUpdateTotal();
    });
}

// Memanggil calculateAndUpdateTotal() pada saat halaman dimuat
document.addEventListener('DOMContentLoaded', function () {
    calculateAndUpdateTotal();
});

//batasssssssssssssssssssssssssssssssssssssssss
