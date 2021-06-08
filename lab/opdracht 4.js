<html>
<script>
var kleuren = ["rood","geel","groen","blauw","oranje"];
console.log(kleuren.toString());
var nieuwkleur = prompt("Type een nieuwe kleur in");
kleuren.push(nieuwkleur);
console.log(kleuren.toString());
var nieuwkleur = prompt("Type een nieuwe kleur in");
kleuren.unshift(nieuwkleur);
console.log(kleuren.toString());
kleuren.sort();
console.log(kleuren.toString());
kleuren = kleuren.splice(0,3);
var kleuren2 = kleuren.slice(3);
console.log(kleuren.toString());  
console.log(kleuren2.toString());
var kleuren3 = kleuren;
console.log(kleuren3.toString);
</script>
</html>
