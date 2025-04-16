<link rel="stylesheet" href="../Assets/Css/avatar.css">

<div class="container">
  <div class="avatar avatar--green">
    <div class="avatar-body body--green">
      <div class="avatar-eye eye--left">
        <div class="avatar-eye-pupil pupil--purple">
          <span class="avatar-eye-pupil-blackThing">
            <span class="avatar-eye-pupil-lightReflection"></span>
          </span>
        </div>        
      </div>
      <div class="avatar-eye eye--right">
        <div class="avatar-eye-pupil pupil--purple">
          <span class="avatar-eye-pupil-blackThing">
            <span class="avatar-eye-pupil-lightReflection"></span>
          </span>
        </div>
      </div>
      <div class="avatar-smile"></div>
      <div class="avatar-tooth tooth--left"></div>
      <div class="avatar-tooth tooth--right"></div>
    </div>
  </div>
  <div class="avatar avatar--orange">
    <div class="avatar-body avatar-body--round body--pink">
    <div class="avatar-horn horn--right"></div>
    <div class="avatar-horn horn--left"></div>
      <div class="avatar-eye avatar-eye--orange eye--center">
        <div class="avatar-eye-pupil pupil--orange">
          <span class="avatar-eye-pupil-blackThing">
            <span class="avatar-eye-pupil-lightReflection"></span>
          </span>
        </div>        
      </div>
      <div class="avatar-smile">
        <span class="avatar-tongue"></span>
      </div>
    </div>
  </div>
  <div class="avatar avatar--pinkish">
    <div class="avatar-body body--violet">
      <div class="avatar-eye avatar-eye--magenta eye--left">
        <div class="avatar-eye-pupil pupil--purple">
          <span class="avatar-eye-pupil-blackThing">
            <span class="avatar-eye-pupil-lightReflection"></span>
          </span>
        </div>        
      </div>
      <div class="avatar-eye avatar-eye--magenta eye--right">
        <div class="avatar-eye-pupil pupil--purple">
          <span class="avatar-eye-pupil-blackThing">
            <span class="avatar-eye-pupil-lightReflection"></span>
          </span>
        </div>
      </div>
      <div class="avatar-smile">
      </div>
    </div>
  </div>
  <div class="avatar avatar--blue">
    <div class="avatar-body body--darkPink">
      <div class="avatar-eye avatar-eye--green eye--left">
        <div class="avatar-eye-pupil pupil--green">
          <span class="avatar-eye-pupil-blackThing">
            <span class="avatar-eye-pupil-lightReflection"></span>
          </span>
        </div>        
      </div>
      <div class="avatar-eye avatar-eye--violet eye--right">
        <div class="avatar-eye-pupil pupil--pink">
          <span class="avatar-eye-pupil-blackThing">
            <span class="avatar-eye-pupil-lightReflection"></span>
          </span>
        </div>
      </div>
      <div class="avatar-tooth tooth--right"></div>
      <div class="avatar-smile">
      </div>
    </div>
  </div>
  <div class="avatar avatar--magenta">
    <div class="avatar-body body--pinkishViolet">
      <div class="avatar-eye eye--center">
        <div class="avatar-eye-pupil pupil--purple">
          <span class="avatar-eye-pupil-blackThing">
            <span class="avatar-eye-pupil-lightReflection"></span>
          </span>
        </div>        
      </div>
       <div class="avatar-smile">
      </div>
    </div>
  </div>
  <div class="avatar avatar--skyBlue">
    <div class="avatar-body body--limeGreen">
      <div class="avatar-ear ear--left">
        <span class="avatar-signal"></span>
      </div>
      <div class="avatar-ear ear--right">
        <span class="avatar-signal"></span>
      </div>
      <div class="avatar-eye avatar-eye--green eye--center-top">
        <div class="avatar-eye-pupil pupil--limeGreen">
          <span class="avatar-eye-pupil-blackThing">
            <span class="avatar-eye-pupil-lightReflection"></span>
          </span>
        </div>        
      </div>
       <div class="avatar-smile">
      </div>
    </div>
  </div>
</div>


<script>
  const avatars = document.querySelectorAll('.avatar');
  
  // Masquer tous les avatars
  avatars.forEach(avatar => avatar.style.display = 'none');

  // Choisir un index aléatoire entre 0 et avatars.length - 1
  const randomIndex = Math.floor(Math.random() * avatars.length);

  // Afficher un seul avatar au hasard
  avatars[randomIndex].style.display = 'block';
</script>