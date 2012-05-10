<?php
$opcion = 'sobremi';
$idioma = '';

require('header.php');
?>
<div class="titulo">Viajes</div>

<div style="text-align:center;">
    <div id="ta_travelmap" style="text-align:center; width:324">
        <img src="http://www.tripadvisor.com/CommunityMapImage?id=45644656&type=TRIPADVISOR&size=LARGE">
        <ul id="ta_links">
        <li><a href="http://www.tripadvisor.com/members/Iago_Diaz_Manzano">View my profile</a></li>
        <li>Create your own <a href="http://www.tripadvisor.com/MemberProfile-cpt" style="font-size:10px; font-family:Verdana, Arial, Helvetica, sans-serif; color:#3860B0; text-decoration:none;">travel map</a> or <a href="http://www.travelpod.com/" style="font-size:10px; font-family:Verdana, Arial, Helvetica, sans-serif; color:#3860B0; text-decoration:none;">travel blog</a></li>
        <li>Search for <a href="http://www.tripadvisor.com/VacationRentals" style="font-size:10px; font-family:Verdana, Arial, sans-serif; color:#3860B0; text-decoration:none;">vacation rentals</a> at TripAdvisor</li>
        </ul>
    </div>
    <script src="http://www.tripadvisor.com/MapEmbed?mid=45644656&favorites=false&frm=pt&Version=VACATION_RENT_005"></script>
</div>

<?php
require('footer.php');
?>
