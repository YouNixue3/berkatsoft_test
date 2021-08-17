function Collapsed() {
    var SideBar = document.getElementById('mobile-menu')
    if (SideBar.classList.contains('lg:w-80')) {
        SideBar.classList.remove('lg:w-80')
        SideBar.classList.add('lg:w-11')
    } else {
        SideBar.classList.remove('lg:w-11')
        SideBar.classList.add('lg:w-80')
    }
    if (SideBar.classList.contains('w-0')) {
        SideBar.classList.remove('w-0')
        SideBar.classList.add('w-60')
    } else {
        SideBar.classList.remove('w-60')
        SideBar.classList.add('w-0')
    }
}

function modals_rd() {
    var modal = document.getElementById('modals_rd')
    if (modal.classList.contains('hidden')) {
        modal.classList.remove('hidden')
    } else {
        modal.classList.add('hidden')
    }
}
