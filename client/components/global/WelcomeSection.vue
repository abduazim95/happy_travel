<template>
  <section id="welcome-section">
    <v-container>
      <v-row>
        <v-col lg="3" md="5" sm="6" cols="12">
          <img id="logo" src="https://happy-travel.kz/i/logohappytravel.png" />
        </v-col>
        <v-col lg="3" md="3" sm="6" cols="12">
          <div class="h-info-cell">
            <div class="icon-block">
              <v-icon medium color="#fff">fas fa-map-marker-alt</v-icon>
            </div>
            <div class="info-block">
              <label>Ваш город</label>
              <a class="value underlined" href="#">Алматы</a>
              <a class="action" href="#">Схема проезда</a>
            </div>
          </div>
        </v-col>
        <v-spacer/>
        <v-col lg="3" md="4" sm="6" cols="12">
          <div class="h-info-cell">
            <div class="icon-block">
              <v-icon medium color="#fff">fas fa-phone-alt</v-icon>
            </div>
            <div class="info-block">
              <label>Наши контакты</label>
              <a class="value" href="#">+7(727) 226 11 66</a>
              <a class="value" href="#">+7 (775) 007 00 55</a>
              <a class="action" href="#">Перезвоните мне</a>
            </div>
          </div>
        </v-col>
      </v-row>
    </v-container>
  </section>
</template>
<script>
export default {
  name: 'WelcomeSection',
  data() {
    return {
      
    }
  }
}
</script>

<style lang="scss">
  #welcome-section {
    background-image: url(https://happy-travel.kz/upload/userfiles/image/black_friday2.jpg);

    #logo {
      width: 100%;
    }
    .h-info-cell {
      color: #fff;
      display: flex;
      .icon-block {
        @include centerBoth;
        @include roundBlock(60);
        border: 2px solid #fff;
        margin-right: 10px;
      }
      .info-block {
        label {
          font-size: 1rem;
        }
        a {
          display: block;
          text-decoration: none;
          &.value {
            color: #fff;
            font-weight: bold;
            font-size: 1.5rem;
          }
          &.action {
            color: $accent-color;
            font-weight: bold;
          }
        }

      }
    }    
  }
</style>