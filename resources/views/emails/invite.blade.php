<div>
    <h3>You're Invited!</h3>
    <p>Hello, {{ $user->name }}</p>

    <p>Wilhem Alcivar and Alexandra Bozzini are having a wedding and you are invited to attend October 13, 2018</p>

    <p>To RSVP you may follow <a href="{{ $invitation->get_link() }}"> this link </a>.</p>

    <p>
        When you RSVP you will be signed up to recieve updates.
        You will also be able to update your food order, give
        monetary gifts, and look up information on events related
        to the wedding all in one place.
    </p>

    <p>We can't wait to see you there!</p>
</div>