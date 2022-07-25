<x-template.menu.menu-item title="Dashboard" url="alumni/dashboard" icon="home" />
<li class="nav-item menu-open">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-graduation-cap"></i>
        <p>
            Alumni
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <x-template.menu.menu-item title="Input Alumni" url="alumni/alumnis" icon="circle" />
        <x-template.menu.menu-item title="Buku Alumni" url="alumni/bukualumnis" icon="circle" />
    </ul>
</li>
<x-template.menu.menu-item title="Pengajuan Pengambilan Ijazah" url="alumni/pengajuanpengambilanijazah"
    icon="certificate" />
<x-template.menu.menu-item title="Pengajuan Legalisir" url="alumni/pengajuanlegalisir" icon="stamp" />
<x-template.menu.menu-item title="Etiket" url="alumni/etiket" icon="comment-dots" />
