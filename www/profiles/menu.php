<div class="menu">

    <a <?php if (!$is_main_page): ?>href="/"<?php endif; ?>>
        <div class="menuelem"><img src="/img/home.png" alt="Главная"><div>ГЛАВНАЯ СТРАНИЦА</div></div>
    </a>
    <a href="/facades"><div class="menuelem"><img src="/img/fasad.png" alt="Фасадные работы"><div>ФАСАДНЫЕ РАБОТЫ</div></div></a>
    <a href="/roofs"><div class="menuelem"><img src="/img/krov.png" alt="Кровельные работы"><div>КРОВЕЛЬНЫЕ РАБОТЫ</div></div></a>
    <a href="/fire"><div class="menuelem"><img src="/img/fire2.png" alt="ГАЗОВОЕ ОБОРУДОВАНИЕ"><div>ГАЗОВОЕ ОБОРУДОВАНИЕ </div></div></a>
	<span><div class="menuelem"><img src="/img/fire.png" alt="Промальпинизм"><div>ДОПОЛНИТЕЛЬНЫЕ УЛУГИ</div> 
	<div class="pdmenu">
	<a href="/heating">Отопление</a>
	<a href="/watersupply">Водоснабжение</a>
	<a href="/indmounts">Промальпинизм</a>
	</div></div>
	</span>
    <a class="nwpnc" href="/news"><div class="menuelem"><img src="/img/news.png" alt="Новости компании"><div>НОВОСТИ</div></div></a>
    <a href="/viprab"><div class="menuelem"><img src="/img/vipoln.png" alt="Выполнение работы"><div>ПОРТФОЛИО</div></div></a>
	<a href="/partners"><div class="menuelem"><img src="/img/partneram.png" alt="Контакты"><div>ПАРТНЕРАМ</div></div></a>
    <a href="/contact"><div class="menuelem"><img src="/img/phone1.png" alt="Контакты"><div>КОНТАКТЫ</div></div></a>
    <div class="flcl"></div>
</div>

<style>
.pdmenu {
width:180px;
padding-top:0px;
padding-bottom:0px;
left:50%;
margin-top:4px;
margin-left:-90px;
border:1px  solid #6b7790; 
display:none;
background:#dde1e8;
color:#6b7790;
text-transform:uppercase;
}
.menuelem {
position:relative;
padding-bottom:10px;
}
.menuelem:hover .pdmenu{
display:block;
position:absolute;
z-index:10;

}

.pdmenu a {
padding-bottom:10px;
padding-top:10px;
display:inline-block;
}
.menuelem:hover .pdmenu a {
width:100%;
}

 .pdmenu a:hover {
 background:#fff;
 }

.menu {
margin-bottom:10px;
}
</style>