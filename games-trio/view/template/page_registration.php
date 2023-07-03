<div class="home-page"><h1>-Registration-</h1>
    <div class="columns" id="login" >
        <form action="index.php?page=register" method="post" onsubmit="return validate()">
            <div class="container">

                <label class="register"> Username </br></label>
                <input id="username" type="text" name="username"  placeholder= "Enter Username" size="15" required />
                <label class = "register">
                    Gender :
                </label></br>
                <input class="register" id="male" type="radio"  name="gender" > Male
                <input class="register" id="female" type="radio"  name="gender"  > Female
                <label  class="register">
                    Age:
                </label>
                <select id="age" name="age">
                    <option value="">
                        <!-- -->
                    </option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                    <option>32</option>
                    <option>33</option>
                    <option>34</option>
                    <option>35</option>
                    <option>36</option>
                    <option>37</option>
                    <option>38</option>
                    <option>39</option>
                    <option>40</option>
                    <option>41</option>
                    <option>42</option>
                    <option>43</option>
                    <option>44</option>
                    <option>45</option>
                    <option>46</option>
                    <option>47</option>
                    <option>48</option>
                    <option>49</option>
                    <option>50</option>
                    <option>51</option>
                    <option>52</option>
                    <option>53</option>
                    <option>54</option>
                    <option>55</option>
                    <option>56</option>
                    <option>57</option>
                    <option>58</option>
                    <option>59</option>
                    <option>60</option>
                    <option>61</option>
                    <option>62</option>
                    <option>63</option>
                    <option>64</option>
                    <option>65</option>
                    <option>66</option>
                    <option>67</option>
                    <option>68</option>
                    <option>69</option>
                    <option>70</option>
                    <option>71</option>
                    <option>72</option>
                    <option>73</option>
                    <option>74</option>
                    <option>75</option>
                    <option>76</option>
                    <option>77</option>
                    <option>78</option>
                    <option>79</option>
                    <option>80</option>
                    <option>81</option>
                    <option>82</option>
                    <option>83</option>
                    <option>84</option>
                    <option>85</option>
                    <option>86</option>
                    <option>87</option>
                    <option>88</option>
                    <option>89</option>
                    <option>90</option>
                    <option>91</option>
                    <option>92</option>
                    <option>93</option>
                    <option>94</option>
                    <option>95</option>
                    <option>96</option>
                    <option>97</option>
                    <option>98</option>
                    <option>99</option>
                </select>
                <label class = "register" for="email"></br>Email</label>
                <input id="email" type="text" placeholder="Enter Email" name="email" method="post" required>
                <label class = "register" for="psw">Password</label>
                <input id="psw" type="password" placeholder="Enter Password" name="password" required>
                <label class = "register" for="psw_repeat">Re-type Password</label>
                <input id="psw_repeat" type="password" placeholder="Retype Password" name="pass_repeat" required>
                <button type="submit" value="submit" class="btn">Register</button>
            </div>
        </form>
    </div>
</div>
<div class="footer">
    <script>
        <?php require_once( DIR_JS . "/validate.js"); ?>
    </script>
</div>
</body>
</html>