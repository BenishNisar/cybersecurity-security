<div class="field">
    <label for="meta_title">SEO title</label><input id="meta_title" name="meta_title"
        value="{{ old('meta_title', $item->meta_title) }}" maxlength="150"><small>Leave blank to use the page or article
        title.</small>
</div>
<div class="field"><label for="meta_description">Meta description</label>
    <textarea id="meta_description" name="meta_description" rows="3" maxlength="320">{{ old('meta_description', $item->meta_description) }}</textarea><small>A concise, accurate summary of the page.</small>
</div>
<div class="field"><label for="canonical_url">Canonical URL override</label><input id="canonical_url"
        name="canonical_url" type="url" value="{{ old('canonical_url', $item->canonical_url) }}"
        maxlength="2048"><small>Optional. The current page URL is used by default.</small></div>
<div class="form-grid">
    <div class="field"><label for="og_title">Social sharing title</label><input id="og_title" name="og_title"
            value="{{ old('og_title', $item->og_title) }}" maxlength="150"></div>
    <div class="field"><label for="og_image_upload">Social sharing image</label><input id="og_image_upload"
            name="og_image_upload" type="file" accept="image/png,image/jpeg,image/webp"><small>PNG, JPG or WebP.
            Maximum 2 MB, 4000 × 4000 pixels.</small>
        @if ($item->og_image)
            <img class="image-preview" src="{{ asset($item->og_image) }}" alt="Current sharing image" loading="lazy">
        @endif
    </div>
</div>
<div class="field"><label for="og_description">Social sharing description</label>
    <textarea id="og_description" name="og_description" rows="2" maxlength="320">{{ old('og_description', $item->og_description) }}</textarea>
</div>
<input type="hidden" name="is_indexable" value="0"><label class="checkbox-label"><input type="checkbox"
        name="is_indexable" value="1" @checked(old('is_indexable', $item->is_indexable))> Allow search engines to index this public
    page</label>
<p class="field-help">This setting is a crawler instruction. Drafts and private admin pages remain protected separately.
</p>
