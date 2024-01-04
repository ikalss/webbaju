// Ambil elemen tombol wishlist dan jumlah item di dalamnya
const wishlistButton = document.getElementById('wishlistBtn');
const wishlistCount = document.getElementById('wishlistCount');

// Fungsi untuk menambah item ke wishlist
function addItemToWishlist() {
  // Logika untuk menambah item ke wishlist
  // ...

  // Update jumlah item di badge wishlist
  const currentCount = parseInt(wishlistCount.innerText);
  wishlistCount.innerText = currentCount + 1;
}

// Fungsi untuk menghapus item dari wishlist
function removeItemFromWishlist() {
  // Logika untuk menghapus item dari wishlist
  // ...

  // Update jumlah item di badge wishlist
  const currentCount = parseInt(wishlistCount.innerText);
  wishlistCount.innerText = currentCount - 1;
}

// Tambahkan event listener saat tombol wishlist ditekan
wishlistButton.addEventListener('click', addItemToWishlist);
// Tambahkan event listener saat tombol wishlist ditekan (untuk menghapus item)
wishlistButton.addEventListener('contextmenu', removeItemFromWishlist);

