<?php

?>
<!DOCTYPE html>
<html>
<body>

<?php
$bag = [
        'apple' => [
        'a' => 'りんご',
        'b' => 80,
        ],
        
        'orange' => [
        'a' => 'オレンジ',
        'b' => 120,
        ],
        
        'grape'  => [
        'a' => 'ぶどう',
        'b' => 220,
        ],    
       
        ];
 
foreach ($bag as $key => $value){
    echo '英語では'. $key. 'と表示され、日本語では'. $value['a']. '、価格は'. $value['b']. '円です。<br/>';
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
</head>
<body>

<table border="1">
  
  <tr>
    <th>名前</th>
    <th>国語</th>
    <th>数学</th>
    <th>社会</th>
    <th>理科</th>
    <th>英語</th>
    <th>平均</th>
  </tr>
  <tr>
    <th>A</th>
    <th>34</th>
    <th>67</th>
    <th>45</th>
    <th>34</th>
    <th>89</th>
    <th>53.8</th>
  </tr>
  <tr>
    <th>B</th>
    <th>76</th>
    <th>72</th>
    <th>65</th>
    <th>77</th>
    <th>80</th>
    <th>74</th>
  </tr>
  <tr>
    <th>C</th>
    <th>98</th>
    <th>87</th>
    <th>88</th>
    <th>92</th>
    <th>96</th>
    <th>92.2</th>
  </tr>
  <tr>
    <th>D</th>
    <th>65</th>
    <th>34</th>
    <th>71</th>
    <th>56</th>
    <th>76</th>
    <th>60.4</th>
  </tr>
  <tr>
    <th>E</th>
    <th>67</th>
    <th>55</th>
    <th>87</th>
    <th>56</th>
    <th>69</th>
    <th>66.8</th>
  </tr>
  <tr>
    <th>F</th>
    <th>81</th>
    <th>79</th>
    <th>74</th>
    <th>82</th>
    <th>85</th>
    <th>80.2</th>
  </tr>
  <tr>
    <th>平均</th>
    <th>70.2</th>
    <th>65.7</th>
    <th>71.7</th>
    <th>66.2</th>
    <th>82.5</th>
    <th>71.2</th>
  </tr>
</table>

</body>
</html>


</body>
</html>
