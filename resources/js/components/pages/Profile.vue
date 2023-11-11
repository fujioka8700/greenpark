<template>
  <div>
    <v-sheet max-width="800" min-width="300" class="mx-auto pa-5">
      <h2>運営者について</h2>
      <v-sheet max-width="500" min-width="300" class="mx-auto py-5">
        <img
          src="https://4.bp.blogspot.com/-S6OAO0IYrRA/UdEeXO_O67I/AAAAAAAAVts/scX3FAJEwr4/s230/tree_green.png"
          class="float-left mr-3 mb-3"
        />
        <p>
          こんにちは。当サイトをアクセスしていただきありがとうございます。
          GreenParkを運営している「ふじおか」と言います。
        </p>
        <p>
          私は、自宅では観葉植物を育てていて、花や植物が好きです。そんな私が、外で見かける植物たちは、「この植物の名前は？特徴は？」と気になることがあるのですが、結局、花の名前がわからず、何の植物なのか、よくわからないことがよくあります。
        </p>
        <p>
          なので、ここは<span class="text-red font-weight-bold">逆転の発想</span
          >で、「<span class="text-red font-weight-bold"
            >植物の名前ではなく、生えている場所</span
          >」から、植物を探し出せたらいいのにな、と考え当サイトを製作しました。
          探し出せた植物には、コメントやいいねも、できるようにしています。
        </p>

        <p>
          <img
            src="https://2.bp.blogspot.com/-87sBpx97gR0/U9y_Y3H3YVI/AAAAAAAAjb4/M072PcK65nc/s220/flower_seichou7.png"
            class="float-right ml-3"
          />
          なにぶん初めてのサイト開発で、いろいろ至らないところがあるかもしれません。今後も、当サイトを盛り上げていくので、よろしくお願いします。
        </p>
      </v-sheet>
      <p class="profile-name py-5 text-center text-h6">
        運営者：ふじおか
        <a href="https://twitter.com/fujioka8700">
          <v-icon icon="mdi-alpha-x-box-outline" color="info"></v-icon>
        </a>
      </p>
    </v-sheet>
  </div>
</template>

<script setup></script>

<style lang="scss" scoped>
img {
  width: 150px;
}
p {
  margin-bottom: 0.8em;
}
.profile-name {
  clear: both;
}
</style>
