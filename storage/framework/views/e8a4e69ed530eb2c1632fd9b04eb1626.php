<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <nav><img src="none.png"><input type="text" name="search" placeholder="Search..."></nav>
        <header><img src="none.png"></header>
        <main>
            <p>Pembelian</p>
            <a href="<?php echo e(route('kategori_pakaian')); ?>"><button>Kategori</button></a>
            <a href="<?php echo e(route('data_pakaian')); ?>"><button>Pakaian</button></a>
            <a href="<?php echo e(route('review_pakaian')); ?>"><button>Review</button></a>
            <a href="<?php echo e(route('data_user')); ?>"><button>User</button></a>
            <a href="<?php echo e(route('metode_pembayaran')); ?>"><button>Metode</button></a>
            <a href="<?php echo e(route('data_pembelian')); ?>"><button>Pembelian</button></a>
            <a href="<?php echo e(route('detail_pembelian')); ?>"><button>Detail</button></a>
            <a href="<?php echo e(route('dashboard')); ?>"><button>Dashboard</button></a>
        </main>
        <footer><hr/></footer>
    </body>
</html><?php /**PATH D:\Belajar\Laravel\Thrift_App\resources\views/web/view/data_pembelian.blade.php ENDPATH**/ ?>